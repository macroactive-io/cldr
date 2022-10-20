<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptNewaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptNewa();

        self::assertSame('Newa', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('333', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Newa', $script->unicodeName());
    }
}
