<?php

declare(strict_types=1);

namespace Macroactive\Cldr;

use Exception;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;
use SimpleXMLElement;

use function array_slice;
use function basename;
use function bin2hex;
use function count;
use function explode;
use function glob;
use function implode;
use function preg_match;
use function preg_quote;
use function simplexml_load_file;
use function sprintf;
use function str_ends_with;
use function str_starts_with;
use function strtr;

/**
 * Tests for the CLDR
 *
 * @coversNothing
 */
class CldrTest extends TestCase
{
    /** @var array<string, array<string, SimpleXMLElement>> */
    private static array $cachedXmls = [];

    /**
     * Test numbers
     *
     * @large
     */
    public function testNumbersAndCharacterOrder(): void
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
            $dir    = self::cldrValue($cldr, '/ldml/layout/orientation/characterOrder');
            self::assertSame($direction[$dir], $locale->direction());

            $def_num_system = self::cldrValue($cldr, '/ldml/numbers/defaultNumberingSystem');

            try {
                $alias = self::cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/alias/@path");

                if ($alias === "../symbols[@numberSystem='latn']") {
                    $def_num_system = 'latn';
                }
            } catch (Exception $ex) {
            }
            $decimal      = self::cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/decimal");
            $group        = self::cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/group");
            $percent_sign = self::cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/percentSign");
            $minus_sign   = self::cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/minusSign");

            $def_num_system = self::cldrValue($cldr, '/ldml/numbers/defaultNumberingSystem');

            try {
                $alias = self::cldrValue($cldr, "/ldml/numbers/decimalFormats[@numberSystem='" . $def_num_system . "']/alias/@path");

                if ($alias === "../decimalFormats[@numberSystem='latn']") {
                    $def_num_system = 'latn';
                }
            } catch (Exception $ex) {
            }
            $standard = self::cldrValue($cldr, "/ldml/numbers/decimalFormats[@numberSystem='" . $def_num_system . "']/decimalFormatLength[not(@type)]/decimalFormat/pattern");
            $percent  = self::cldrValue($cldr, "/ldml/numbers/percentFormats[@numberSystem='" . $def_num_system . "']/percentFormatLength[not(@type)]/percentFormat/pattern");

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
     * @throws Exception
     */
    private static function cldrValue(string $file, string $xpath): string
    {
        $locale = basename($file, '.xml');

        $data = self::xpathCached($locale, $file, $xpath);

        while (in_array($data, [false, null, []], true)) {
            if (str_ends_with($file, 'root.xml')) {
                throw new Exception(sprintf('Cannot find xpath "%s" in file "%s" for locale "%s"', $xpath, $file, $locale));
            }

            $file = self::parentCldr($file);

            $data = self::xpathCached($locale, $file, $xpath);
        }

        return (string) $data[0];
    }

    private static function xpathCached(string $locale, string $file, string $xpath): null|bool|array
    {
        if (!isset(self::$cachedXmls[$locale])) {
            self::$cachedXmls = [$locale => []];
        }

        $xml = self::$cachedXmls[$locale][$file] ?? null;

        if (null === $xml) {
            self::$cachedXmls[$locale][$file] = simplexml_load_file($file);
            $xml                              = self::$cachedXmls[$locale][$file];
        }

        return $xml->xpath($xpath);
    }
}
