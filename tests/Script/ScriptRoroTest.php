<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptRoro;
use PHPUnit\Framework\TestCase;

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
