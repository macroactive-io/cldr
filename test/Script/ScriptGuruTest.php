<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptGuruTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptGuru();

        self::assertSame('Guru', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('310', $script->number());
        self::assertSame(['੦', '੧', '੨', '੩', '੪', '੫', '੬', '੭', '੮', '੯'], $script->numerals());
        self::assertSame('Gurmukhi', $script->unicodeName());
    }
}
