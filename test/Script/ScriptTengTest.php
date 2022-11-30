<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptTeng;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptTengTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTeng();

        self::assertSame('Teng', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('290', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
