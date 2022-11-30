<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptMend;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptMendTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMend();

        self::assertSame('Mend', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('438', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Mende_Kikakui', $script->unicodeName());
    }
}
