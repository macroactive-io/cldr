<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSyrc;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSyrcTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSyrc();

        self::assertSame('Syrc', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('135', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Syriac', $script->unicodeName());
    }
}
