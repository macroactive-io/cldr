<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptTaluTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTalu();

        self::assertSame('Talu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('354', $script->number());
        self::assertSame(['᧐', '᧑', '᧒', '᧓', '᧔', '᧕', '᧖', '᧗', '᧘', '᧙'], $script->numerals());
        self::assertSame('New_Tai_Lue', $script->unicodeName());
    }
}
