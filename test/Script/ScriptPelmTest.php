<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptPelmTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPelm();

        self::assertSame('Pelm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('016', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
