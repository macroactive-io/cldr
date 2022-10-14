<?php

declare(strict_types=1);

namespace Fisharebest\Localization;

use Exception;
use Fisharebest\Localization\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

use function array_slice;
use function basename;
use function bin2hex;
use function count;
use function explode;
use function glob;
use function implode;
use function preg_match;
use function preg_quote;
use function strtr;

/**
 * Tests for the CLDR
 *
 * @coversNothing
 */
class CldrTest extends TestCase
{
    /**
     * Test layout
     *
     * @medium
     */
    public function testCharacterOrder(): void
    {
        $direction = [
            'left-to-right' => ScriptDirection::LTR,
            'right-to-left' => ScriptDirection::RTL,
        ];

        foreach (glob(__DIR__ . '/data/cldr-34/main/*.xml') as $cldr) {
            if (str_ends_with($cldr, '/root.xml')) {
                continue;
            }

            $locale = Locale::create(basename($cldr, '.xml'));
            $dir    = $this->cldrValue($cldr, '/ldml/layout/orientation/characterOrder');

            self::assertSame($direction[$dir], $locale->direction());
        }
    }

    /**
     * Test numbers
     *
     * @large
     */
    public function testNumbers(): void
    {
        foreach (glob(__DIR__ . '/data/cldr-34/main/*.xml') as $cldr) {
            if (str_ends_with($cldr, '/root.xml')) {
                continue;
            }

            $locale = Locale::create(basename($cldr, '.xml'));

            $def_num_system = $this->cldrValue($cldr, '/ldml/numbers/defaultNumberingSystem');

            try {
                $alias = $this->cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/alias/@path");

                if ($alias === "../symbols[@numberSystem='latn']") {
                    $def_num_system = 'latn';
                }
            } catch (Exception $ex) {
            }
            $decimal      = $this->cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/decimal");
            $group        = $this->cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/group");
            $percent_sign = $this->cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/percentSign");
            $minus_sign   = $this->cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/minusSign");

            $def_num_system = $this->cldrValue($cldr, '/ldml/numbers/defaultNumberingSystem');

            try {
                $alias = $this->cldrValue($cldr, "/ldml/numbers/decimalFormats[@numberSystem='" . $def_num_system . "']/alias/@path");

                if ($alias === "../decimalFormats[@numberSystem='latn']") {
                    $def_num_system = 'latn';
                }
            } catch (Exception $ex) {
            }
            $standard = $this->cldrValue($cldr, "/ldml/numbers/decimalFormats[@numberSystem='" . $def_num_system . "']/decimalFormatLength[not(@type)]/decimalFormat/pattern");
            $percent  = $this->cldrValue($cldr, "/ldml/numbers/percentFormats[@numberSystem='" . $def_num_system . "']/percentFormatLength[not(@type)]/percentFormat/pattern");

            // The CLDR example doesn't demonstrate the lack of group separators.
            if ($standard === '0.######' && $locale->languageTag() === 'en-US-posix') {
                $standard = '########.###';
            }

            // Check the (end of the) number matches the pattern.  Extra leading digits are OK.
            $number = $locale->number(12345678.089);

            $regex = '/' . strtr($standard, [
                    ',' => preg_quote($group, '/'),
                    '.' => preg_quote($decimal, '/'),
                    '0' => '.',
                    '#' => '.',
                ]) . '$/u';

            $debug = implode('|', [
                basename($cldr),
                'regex=' . $regex . '=' . bin2hex($regex),
                'number=' . $number . '=' . bin2hex($number),
                'standard=' . $standard . '=' . bin2hex($standard),
            ]);

            self::assertTrue(preg_match($regex, $number) === 1, $debug);

            // Check the percentage matches the pattern.
            $number = $locale->percent(12345.67);

            $regex = '/' . strtr($percent, [
                    ',' => preg_quote($group, '/'),
                    '.' => preg_quote($decimal, '/'),
                    '0' => '.',
                    '#' => '.',
                    '%' => preg_quote($percent_sign, '/'),
                ]) . '/u';

            $debug = implode('|', [
                basename($cldr),
                'percentSign=' . $percent_sign . '=' . bin2hex($percent_sign),
                'regex=' . $regex . '=' . bin2hex($regex),
                'number=' . $number . '=' . bin2hex($number),
                'percent=' . $percent,
            ]);

            self::assertTrue(preg_match($regex, $number) === 1, $debug);

            // Check the minus sign is correct
            $number = $locale->number(-1);

            $debug = implode('|', [
                basename($cldr),
                'minusSign=' . $minus_sign . '=' . bin2hex($minus_sign),
                'number=' . $number . '=' . bin2hex($number),
            ]);

            self::assertTrue(str_starts_with($number, $minus_sign)  , $debug);
        }
    }

    /**
     * Find the parent to a CLDR locale file.
     * en_GB.xml -> en.xml -> root.xml
     */
    private static function parentCldr(string $file): string
    {
        $dirname  = dirname($file);
        $basename = basename($file, '.xml');
        $parts    = explode('_', $basename);

        if (count($parts) === 1) {
            return $dirname . '/root.xml';
        }

        return $dirname . '/' . implode('_', array_slice($parts, 0, -1)) . '.xml';
    }

    /**
     * @param string $file
     * @param string $xpath
     *
     * @throws Exception
     */
    private function cldrValue(string $file, string $xpath): string
    {
        $xml = simplexml_load_string(file_get_contents($file));
        $tmp = $file;

        while (in_array($xml->xpath($xpath), [false, null, []], true)) {
            if (str_contains($file, 'root.xml')) {
                throw new Exception('Cannot find ' . $xpath . ' in ' . $tmp);
            }
            $file = self::parentCldr($file);
            $xml  = simplexml_load_string(file_get_contents($file));
        }
        $data = $xml->xpath($xpath);

        return (string) $data[0];
    }
}
