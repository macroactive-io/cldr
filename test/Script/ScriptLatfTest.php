<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptLatfTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLatf();

        self::assertSame('Latf', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('217', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
