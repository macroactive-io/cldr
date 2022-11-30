<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptNbat;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptNbatTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptNbat();

        self::assertSame('Nbat', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('159', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Nabataean', $script->unicodeName());
    }
}
