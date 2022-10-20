<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptMercTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMerc();

        self::assertSame('Merc', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('101', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Meroitic_Cursive', $script->unicodeName());
    }
}
