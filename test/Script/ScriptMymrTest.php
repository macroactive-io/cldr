<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptMymrTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMymr();

        self::assertSame('Mymr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('350', $script->number());
        self::assertSame(['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'], $script->numerals());
        self::assertSame('Myanmar', $script->unicodeName());
    }
}
