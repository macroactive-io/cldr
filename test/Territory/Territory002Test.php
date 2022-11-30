<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory002;
use PHPUnit\Framework\TestCase;

class Territory002Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory002();

        self::assertSame('002', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
