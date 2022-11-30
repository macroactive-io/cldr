<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptMaka;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptMakaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMaka();

        self::assertSame('Maka', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('366', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Makasar', $script->unicodeName());
    }
}
