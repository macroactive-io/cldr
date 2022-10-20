<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptCirtTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCirt();

        self::assertSame('Cirt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('291', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
