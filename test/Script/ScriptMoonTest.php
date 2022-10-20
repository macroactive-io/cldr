<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptMoonTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMoon();

        self::assertSame('Moon', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('218', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
