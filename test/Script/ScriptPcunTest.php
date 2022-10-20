<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptPcunTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPcun();

        self::assertSame('Pcun', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('015', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
