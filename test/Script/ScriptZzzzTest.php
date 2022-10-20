<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptZzzzTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptZzzz();

        self::assertSame('Zzzz', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('999', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Unknown', $script->unicodeName());
    }
}
