<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptHluw;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptHluwTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHluw();

        self::assertSame('Hluw', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame([], $script->numerals());
        self::assertSame('Anatolian_Hieroglyphs', $script->unicodeName());
    }
}
