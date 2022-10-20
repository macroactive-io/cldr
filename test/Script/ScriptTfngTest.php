<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptTfngTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTfng();

        self::assertSame('Tfng', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('120', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tifinagh', $script->unicodeName());
    }
}
