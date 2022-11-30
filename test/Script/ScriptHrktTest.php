<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptHrkt;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptHrktTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHrkt();

        self::assertSame('Hrkt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('412', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Katakana_Or_Hiragana', $script->unicodeName());
    }
}
