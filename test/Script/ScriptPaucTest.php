<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptPaucTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPauc();

        self::assertSame('Pauc', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('263', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Pau_Cin_Hau', $script->unicodeName());
    }
}
