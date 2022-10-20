<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptSogdTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSogd();

        self::assertSame('Sogd', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('141', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Sogdian', $script->unicodeName());
    }
}
