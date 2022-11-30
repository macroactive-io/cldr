<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptEgyp;
use PHPUnit\Framework\TestCase;

class ScriptEgypTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptEgyp();

        self::assertSame('Egyp', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('050', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Egyptian_Hieroglyphs', $script->unicodeName());
    }
}
