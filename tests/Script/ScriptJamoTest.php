<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptJamo;
use PHPUnit\Framework\TestCase;

class ScriptJamoTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptJamo();

        self::assertSame('Jamo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('284', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
