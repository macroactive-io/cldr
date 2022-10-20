<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptMrooTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMroo();

        self::assertSame('Mroo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('264', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Mro', $script->unicodeName());
    }
}
