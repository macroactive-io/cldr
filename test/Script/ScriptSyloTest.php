<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptSyloTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSylo();

        self::assertSame('Sylo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('316', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Syloti_Nagri', $script->unicodeName());
    }
}
