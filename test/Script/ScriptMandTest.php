<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptMandTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMand();

        self::assertSame('Mand', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('140', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Mandaic', $script->unicodeName());
    }
}
