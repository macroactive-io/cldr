<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptArmi;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

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
