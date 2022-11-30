<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptJurc;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptJurcTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptJurc();

        self::assertSame('Jurc', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('510', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
