<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptTglgTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTglg();

        self::assertSame('Tglg', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('370', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tagalog', $script->unicodeName());
    }
}
