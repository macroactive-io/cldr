<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptLisuTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLisu();

        self::assertSame('Lisu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('399', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Lisu', $script->unicodeName());
    }
}
