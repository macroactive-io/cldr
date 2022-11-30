<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptToto;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptTotoTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptToto();

        self::assertSame('Toto', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('294', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Toto', $script->unicodeName());
    }
}
