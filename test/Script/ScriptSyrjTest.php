<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptSyrjTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSyrj();

        self::assertSame('Syrj', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('137', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
