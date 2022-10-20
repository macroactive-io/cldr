<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptNarbTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptNarb();

        self::assertSame('Narb', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('106', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_North_Arabian', $script->unicodeName());
    }
}
