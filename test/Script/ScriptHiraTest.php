<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptHira;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptHiraTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHira();

        self::assertSame('Hira', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('410', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hiragana', $script->unicodeName());
    }
}
