<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptAdlmTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptAdlm();

        self::assertSame('Adlm', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('166', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Adlam', $script->unicodeName());
    }
}
