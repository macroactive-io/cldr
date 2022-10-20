<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptZyyyTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptZyyy();

        self::assertSame('Zyyy', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('998', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Common', $script->unicodeName());
    }
}
