<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptKana;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptKanaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKana();

        self::assertSame('Kana', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('411', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Katakana', $script->unicodeName());
    }
}
