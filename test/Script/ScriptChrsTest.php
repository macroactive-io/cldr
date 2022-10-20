<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptChrsTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptChrs();

        self::assertSame('Chrs', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('109', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Chorasmian', $script->unicodeName());
    }
}
