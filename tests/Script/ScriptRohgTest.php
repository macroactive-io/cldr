<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptRohg;
use PHPUnit\Framework\TestCase;

class ScriptRohgTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptRohg();

        self::assertSame('Rohg', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('167', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hanifi_Rohingya', $script->unicodeName());
    }
}
