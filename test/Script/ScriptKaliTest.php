<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptKaliTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKali();

        self::assertSame('Kali', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('357', $script->number());
        self::assertSame(['꤀', '꤁', '꤂', '꤃', '꤄', '꤅', '꤆', '꤇', '꤈', '꤉'], $script->numerals());
        self::assertSame('Kayah_Li', $script->unicodeName());
    }
}
