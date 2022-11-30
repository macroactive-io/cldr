<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptHano;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptHanoTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHano();

        self::assertSame('Hano', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('371', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hanunoo', $script->unicodeName());
    }
}
