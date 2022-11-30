<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory013;
use PHPUnit\Framework\TestCase;

class Territory013Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory013();

        self::assertSame('013', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
