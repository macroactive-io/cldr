<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptOlckTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptOlck();

        self::assertSame('Olck', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('261', $script->number());
        self::assertSame(['᱐', '᱑', '᱒', '᱓', '᱔', '᱕', '᱖', '᱗', '᱘', '᱙'], $script->numerals());
        self::assertSame('Ol_Chiki', $script->unicodeName());
    }
}
