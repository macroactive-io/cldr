<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory003;
use PHPUnit\Framework\TestCase;

class Territory003Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory003();

        self::assertSame('003', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
