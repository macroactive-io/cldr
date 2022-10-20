<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptLepcTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLepc();

        self::assertSame('Lepc', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('335', $script->number());
        self::assertSame(['᱀', '᱁', '᱂', '᱃', '᱄', '᱅', '᱆', '᱇', '᱈', '᱉'], $script->numerals());
        self::assertSame('Lepcha', $script->unicodeName());
    }
}
