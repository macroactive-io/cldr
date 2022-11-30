<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptOrya;
use PHPUnit\Framework\TestCase;

class ScriptOryaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptOrya();

        self::assertSame('Orya', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('327', $script->number());
        self::assertSame(['୦', '୧', '୨', '୩', '୪', '୫', '୬', '୭', '୮', '୯'], $script->numerals());
        self::assertSame('Oriya', $script->unicodeName());
    }
}
