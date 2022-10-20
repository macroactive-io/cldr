<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptCherTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCher();

        self::assertSame('Cher', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('445', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cherokee', $script->unicodeName());
    }
}
