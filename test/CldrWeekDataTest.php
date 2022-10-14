<?php

declare(strict_types=1);

namespace Fisharebest\Localization;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the CLDR
 *
 * @coversNothing
 */
class CldrWeekDataTest extends TestCase
{
    /**
     * Test weekData
     *
     * @medium
     */
    public function testWeekData(): void
    {
        $days = [
            'sun' => 0,
            'mon' => 1,
            'tue' => 2,
            'wed' => 3,
            'thu' => 4,
            'fri' => 5,
            'sat' => 6,
        ];

        $cldr = simplexml_load_string(file_get_contents(__DIR__ . '/data/cldr-34/supplemental/supplementalData.xml'));

        foreach ($cldr->weekData->firstDay as $xml) {
            if ('variant' !== (string) $xml->attributes()->alt) {
                $day         = $days[(string) $xml->attributes()->day];
                $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
                foreach ($territories as $code) {
                    $class     = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));
                    $territory = new $class();
                    self::assertSame($day, $territory->firstDay());
                }
            }
        }

        foreach ($cldr->weekData->weekendStart as $xml) {
            $day         = $days[(string) $xml->attributes()->day];
            $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($territories as $code) {
                $class     = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));
                $territory = new $class();
                self::assertSame($day, $territory->weekendStart());
            }
        }

        foreach ($cldr->weekData->weekendEnd as $xml) {
            $day         = $days[(string) $xml->attributes()->day];
            $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($territories as $code) {
                $class     = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));
                $territory = new $class();
                self::assertSame($day, $territory->weekendEnd());
            }
        }
    }
}
