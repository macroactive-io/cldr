<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptArmi;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptArmiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptArmi();

        self::assertSame('Armi', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('124', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Imperial_Aramaic', $script->unicodeName());
    }
}
