<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptPhliTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPhli();

        self::assertSame('Phli', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('131', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Inscriptional_Pahlavi', $script->unicodeName());
    }
}
