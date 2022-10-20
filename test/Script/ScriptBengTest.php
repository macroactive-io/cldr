<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptBengTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBeng();

        self::assertSame('Beng', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('325', $script->number());
        self::assertSame(['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'], $script->numerals());
        self::assertSame('Bengali', $script->unicodeName());
    }
}
