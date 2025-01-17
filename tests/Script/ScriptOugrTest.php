<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptOugr;
use PHPUnit\Framework\TestCase;

class ScriptOugrTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptOugr();

        self::assertSame('Ougr', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('143', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Uyghur', $script->unicodeName());
    }
}
