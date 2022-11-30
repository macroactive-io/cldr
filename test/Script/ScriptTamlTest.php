<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptTaml;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptTamlTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTaml();

        self::assertSame('Taml', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('346', $script->number());
        self::assertSame(['௦', '௧', '௨', '௩', '௪', '௫', '௬', '௭', '௮', '௯'], $script->numerals());
        self::assertSame('Tamil', $script->unicodeName());
    }
}
