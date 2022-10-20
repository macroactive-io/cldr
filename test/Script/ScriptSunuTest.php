<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptSunuTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSunu();

        self::assertSame('Sunu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('274', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
