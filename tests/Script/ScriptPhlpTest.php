<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptPhlp;
use PHPUnit\Framework\TestCase;

class ScriptPhlpTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPhlp();

        self::assertSame('Phlp', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('132', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Psalter_Pahlavi', $script->unicodeName());
    }
}
