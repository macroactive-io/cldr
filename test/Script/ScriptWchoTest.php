<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptWcho;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptWchoTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptWcho();

        self::assertSame('Wcho', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('283', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Wancho', $script->unicodeName());
    }
}
