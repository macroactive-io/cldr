<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptThai;

use Macroactive\Cldr\Script\ScriptDirection;

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
