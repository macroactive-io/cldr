<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptLekeTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLeke();

        self::assertSame('Leke', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('364', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
