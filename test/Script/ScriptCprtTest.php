<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptCprtTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCprt();

        self::assertSame('Cprt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('403', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cypriot', $script->unicodeName());
    }
}
