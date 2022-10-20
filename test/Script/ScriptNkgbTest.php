<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptNkgbTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptNkgb();

        self::assertSame('Nkgb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('420', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
