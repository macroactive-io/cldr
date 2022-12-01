<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptHatr;
use PHPUnit\Framework\TestCase;

class ScriptHatrTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHatr();

        self::assertSame('Hatr', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('127', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hatran', $script->unicodeName());
    }
}
