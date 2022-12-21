<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests;

use Macroactive\Cldr\Locale;

class CldrLanguagesTest extends TestCase
{
    /**
     * Test languages
     *
     * @medium
     */
    public function testLanguages(): void
    {
        foreach (self::getMainCldrFiles() as $xml) {
            if (str_ends_with($xml, '/root.xml')) {
                continue;
            }

            $cldr         = simplexml_load_string(file_get_contents($xml));
            $locale       = Locale::create(basename($xml, '.xml'));
            $language_tag = $locale->languageTag();

            $endonyms = $cldr->xpath("/ldml/localeDisplayNames/languages/language[@type='" . $language_tag . "'][not(@alt)]");
            foreach ($endonyms as $endonym) {
                $debug = implode('|', [
                    basename($xml),
                    'languageTag: ' . $language_tag,
                    'endonym:' . $endonym,
                ]);

                self::assertSame((string) $endonym, $locale->endonym(), $debug);
            }
        }
    }
}
