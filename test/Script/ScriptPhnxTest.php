<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptPhnx;
use PHPUnit\Framework\TestCase;

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
