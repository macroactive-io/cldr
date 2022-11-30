<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptOugr;

use Macroactive\Cldr\Script\ScriptDirection;

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
