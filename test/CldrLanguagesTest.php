<?php

declare(strict_types=1);

namespace Macroactive\Cldr;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the CLDR
 *
 * @coversNothing
 */
class CldrLanguagesTest extends TestCase
{
    /**
     * Test languages
     *
     * @medium
     */
    public function testLanguages(): void
    {
        foreach (glob(__DIR__ . '/data/cldr-34/main/*.xml') as $xml) {
            if (!str_contains($xml, '/root.xml')) {
                $cldr         = simplexml_load_string(file_get_contents($xml));
                $locale       = Locale::create(basename($xml, '.xml'));
                $language_tag = $locale->languageTag();

                $endonyms = $cldr->xpath("/ldml/localeDisplayNames/languages/language[@type='" . $language_tag . "'][not(@alt)]");
                foreach ($endonyms as $endonym) {
                    $debug = implode('|', [
                        basename($xml),
                        $endonym,
                    ]);

                    self::assertSame((string) $endonym, $locale->endonym(), $debug);
                }
            }
        }
    }
}
