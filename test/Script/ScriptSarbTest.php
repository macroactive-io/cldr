<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSarb;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSarbTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSarb();

        self::assertSame('Sarb', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('105', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_South_Arabian', $script->unicodeName());
    }
}
