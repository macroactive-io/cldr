<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptAfakTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptAfak();

        self::assertSame('Afak', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('439', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
