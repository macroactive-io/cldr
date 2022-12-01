<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory143;
use PHPUnit\Framework\TestCase;

class Territory143Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory143();

        self::assertSame('143', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
