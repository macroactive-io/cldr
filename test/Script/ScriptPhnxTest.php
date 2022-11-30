<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptPhnx;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptPhnxTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPhnx();

        self::assertSame('Phnx', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('115', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Phoenician', $script->unicodeName());
    }
}
