<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptTotoTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptToto();

        self::assertSame('Toto', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('294', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Toto', $script->unicodeName());
    }
}
