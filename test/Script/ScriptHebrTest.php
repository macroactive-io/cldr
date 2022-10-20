<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptHebrTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHebr();

        self::assertSame('Hebr', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('125', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hebrew', $script->unicodeName());
    }
}
