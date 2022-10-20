<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptLinbTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLinb();

        self::assertSame('Linb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('401', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Linear_B', $script->unicodeName());
    }
}
