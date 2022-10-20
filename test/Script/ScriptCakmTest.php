<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptCakmTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCakm();

        self::assertSame('Cakm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('349', $script->number());
        self::assertSame(['𑄶', '𑄷', '𑄸', '𑄹', '𑄺', '𑄻', '𑄼', '𑄽', '𑄾', '𑄿'], $script->numerals());
        self::assertSame('Chakma', $script->unicodeName());
    }
}
