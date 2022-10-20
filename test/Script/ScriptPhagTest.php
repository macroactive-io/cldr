<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptPhagTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPhag();

        self::assertSame('Phag', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('331', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Phags_Pa', $script->unicodeName());
    }
}
