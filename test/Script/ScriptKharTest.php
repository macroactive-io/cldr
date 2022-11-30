<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptKhar;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptKharTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKhar();

        self::assertSame('Khar', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('305', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Kharoshthi', $script->unicodeName());
    }
}
