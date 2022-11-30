<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptHanb;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptHanbTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHanb();

        self::assertSame('Hanb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('503', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
