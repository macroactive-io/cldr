<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptBrai;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

class ScriptBraiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBrai();

        self::assertSame('Brai', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('570', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Braille', $script->unicodeName());
    }
}
