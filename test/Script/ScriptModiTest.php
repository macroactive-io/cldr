<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptModiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptModi();

        self::assertSame('Modi', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('324', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Modi', $script->unicodeName());
    }
}
