<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Variant;

use Macroactive\Cldr\Variant\VariantPosix;
use PHPUnit\Framework\TestCase;

class VariantPosixTest extends TestCase
{
    public function testProperties(): void
    {
        $variant = new VariantPosix();

        self::assertSame('posix', $variant->code());
    }
}
