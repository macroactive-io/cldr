<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptDsrt;
use PHPUnit\Framework\TestCase;

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
