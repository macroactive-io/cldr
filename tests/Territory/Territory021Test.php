<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory021;
use PHPUnit\Framework\TestCase;

class Territory021Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory021();

        self::assertSame('021', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
