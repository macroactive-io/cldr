<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptPalm;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptPalmTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPalm();

        self::assertSame('Palm', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('126', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Palmyrene', $script->unicodeName());
    }
}
