<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptVaiiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptVaii();

        self::assertSame('Vaii', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('470', $script->number());
        self::assertSame(['꘠', '꘡', '꘢', '꘣', '꘤', '꘥', '꘦', '꘧', '꘨', '꘩'], $script->numerals());
        self::assertSame('Vai', $script->unicodeName());
    }
}
