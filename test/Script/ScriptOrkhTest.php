<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptOrkh;
use PHPUnit\Framework\TestCase;

class ScriptOrkhTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptOrkh();

        self::assertSame('Orkh', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('175', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Turkic', $script->unicodeName());
    }
}
