<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Variant;

use PHPUnit\Framework\TestCase;

class VariantPosixTest extends TestCase
{
    public function testProperties(): void
    {
        $variant = new VariantPosix();

        self::assertSame('posix', $variant->code());
    }
}
