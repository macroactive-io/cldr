<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptTavt;
use PHPUnit\Framework\TestCase;

class ScriptTavtTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTavt();

        self::assertSame('Tavt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('359', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tai_Viet', $script->unicodeName());
    }
}
