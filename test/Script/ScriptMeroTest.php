<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptMero;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptMeroTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMero();

        self::assertSame('Mero', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('100', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Meroitic_Hieroglyphs', $script->unicodeName());
    }
}
