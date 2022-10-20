<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptAhomTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptAhom();

        self::assertSame('Ahom', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('338', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Ahom', $script->unicodeName());
    }
}
