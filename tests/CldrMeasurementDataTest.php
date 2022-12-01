<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests;

class CldrMeasurementDataTest extends TestCase
{
    /**
     * Test measurementData
     *
     * @medium
     */
    public function testMeasurementData(): void
    {
        $cldr = simplexml_load_string(self::getSupplementalData());

        foreach ($cldr->measurementData->measurementSystem as $xml) {
            if ('temperature' !== (string) $xml->attributes()->category) {
                $type        = (string) $xml->attributes()->type;
                $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
                foreach ($territories as $code) {
                    $class     = 'Macroactive\Cldr\Territory\Territory' . ucfirst(strtolower($code));
                    $territory = new $class();
                    self::assertSame($type, $territory->measurementSystem(), $code);
                }
            }
        }

        foreach ($cldr->measurementData->paperSize as $xml) {
            $type        = (string) $xml->attributes()->type;
            $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($territories as $code) {
                $class     = '\Macroactive\Cldr\Territory\Territory' . ucfirst(strtolower($code));
                $territory = new $class();
                self::assertSame($type, $territory->paperSize());
            }
        }
    }
}
