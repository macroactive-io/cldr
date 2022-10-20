<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptBaliTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBali();

        self::assertSame('Bali', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('360', $script->number());
        self::assertSame(['᭐', '᭑', '᭒', '᭓', '᭔', '᭕', '᭖', '᭗', '᭘', '᭙'], $script->numerals());
        self::assertSame('Balinese', $script->unicodeName());
    }
}
