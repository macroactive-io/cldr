<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptOsge;
use PHPUnit\Framework\TestCase;

class ScriptOsgeTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptOsge();

        self::assertSame('Osge', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('219', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Osage', $script->unicodeName());
    }
}
