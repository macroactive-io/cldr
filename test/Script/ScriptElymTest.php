<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptElym;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptElymTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptElym();

        self::assertSame('Elym', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('128', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Elymaic', $script->unicodeName());
    }
}
