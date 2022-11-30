<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptVisp;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptVispTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptVisp();

        self::assertSame('Visp', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('280', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
