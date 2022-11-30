<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptRoro;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptRoroTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptRoro();

        self::assertSame('Roro', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('620', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
