<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptJurc;
use PHPUnit\Framework\TestCase;

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
