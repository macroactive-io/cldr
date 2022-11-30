<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptMult;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptMultTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMult();

        self::assertSame('Mult', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('323', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Multani', $script->unicodeName());
    }
}
