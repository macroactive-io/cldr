<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory029;
use PHPUnit\Framework\TestCase;

class Territory029Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory029();

        self::assertSame('029', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
