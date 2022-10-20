<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Variant;

use PHPUnit\Framework\TestCase;

class VariantValenciaTest extends TestCase
{
    public function testProperties(): void
    {
        $variant = new VariantValencia();

        self::assertSame('valencia', $variant->code());
    }
}
