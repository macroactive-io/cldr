<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptBopoTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBopo();

        self::assertSame('Bopo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('285', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Bopomofo', $script->unicodeName());
    }
}
