<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptElbaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptElba();

        self::assertSame('Elba', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('226', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Elbasan', $script->unicodeName());
    }
}
