<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptThai;
use PHPUnit\Framework\TestCase;

class ScriptThaiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptThai();

        self::assertSame('Thai', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('352', $script->number());
        self::assertSame(['๐', '๑', '๒', '๓', '๔', '๕', '๖', '๗', '๘', '๙'], $script->numerals());
        self::assertSame('Thai', $script->unicodeName());
    }
}
