<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptDsrt;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptDsrtTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptDsrt();

        self::assertSame('Dsrt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('250', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Deseret', $script->unicodeName());
    }
}
