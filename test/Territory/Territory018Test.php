<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory018;
use PHPUnit\Framework\TestCase;

class Territory018Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory018();

        self::assertSame('018', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
