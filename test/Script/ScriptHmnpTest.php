<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptHmnpTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHmnp();

        self::assertSame('Hmnp', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('451', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Nyiakeng_Puachue_Hmong', $script->unicodeName());
    }
}
