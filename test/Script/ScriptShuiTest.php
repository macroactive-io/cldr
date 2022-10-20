<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptShuiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptShui();

        self::assertSame('Shui', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('530', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
