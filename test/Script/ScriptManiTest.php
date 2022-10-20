<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptManiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMani();

        self::assertSame('Mani', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('139', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Manichaean', $script->unicodeName());
    }
}
