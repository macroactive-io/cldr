<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptOgam;
use PHPUnit\Framework\TestCase;

class ScriptOgamTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptOgam();

        self::assertSame('Ogam', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('212', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Ogham', $script->unicodeName());
    }
}
