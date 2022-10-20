<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptKawiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKawi();

        self::assertSame('Kawi', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('368', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
