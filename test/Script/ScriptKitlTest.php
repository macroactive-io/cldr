<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptKitlTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKitl();

        self::assertSame('Kitl', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('505', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
