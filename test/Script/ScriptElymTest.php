<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptElymTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptElym();

        self::assertSame('Elym', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('128', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Elymaic', $script->unicodeName());
    }
}
