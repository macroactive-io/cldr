<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptBatkTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBatk();

        self::assertSame('Batk', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('365', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Batak', $script->unicodeName());
    }
}
