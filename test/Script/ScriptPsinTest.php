<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptPsin;
use PHPUnit\Framework\TestCase;

class ScriptPsinTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPsin();

        self::assertSame('Psin', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('103', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
