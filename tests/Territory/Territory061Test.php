<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory061;
use PHPUnit\Framework\TestCase;

class Territory061Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory061();

        self::assertSame('061', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
