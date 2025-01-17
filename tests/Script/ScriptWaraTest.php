<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptWara;
use PHPUnit\Framework\TestCase;

class ScriptWaraTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptWara();

        self::assertSame('Wara', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('262', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Warang_Citi', $script->unicodeName());
    }
}
