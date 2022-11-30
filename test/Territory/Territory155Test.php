<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory155;
use PHPUnit\Framework\TestCase;

class Territory155Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory155();

        self::assertSame('155', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
