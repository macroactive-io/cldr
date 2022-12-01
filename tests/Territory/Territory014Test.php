<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory014;
use PHPUnit\Framework\TestCase;

class Territory014Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory014();

        self::assertSame('014', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
