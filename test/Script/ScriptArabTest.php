<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptArab;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptArabTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptArab();

        self::assertSame('Arab', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('160', $script->number());
        self::assertSame(['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'], $script->numerals());
        self::assertSame('Arabic', $script->unicodeName());
    }
}
