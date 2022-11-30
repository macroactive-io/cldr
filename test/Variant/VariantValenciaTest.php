<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Variant;

use Macroactive\Cldr\Variant\VariantValencia;
use PHPUnit\Framework\TestCase;

class VariantValenciaTest extends TestCase
{
    public function testProperties(): void
    {
        $variant = new VariantValencia();

        self::assertSame('valencia', $variant->code());
    }
}
