<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory150;
use PHPUnit\Framework\TestCase;

class Territory150Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory150();

        self::assertSame('150', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
