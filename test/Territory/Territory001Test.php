<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory001;
use PHPUnit\Framework\TestCase;

class Territory001Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory001();

        self::assertSame('001', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
