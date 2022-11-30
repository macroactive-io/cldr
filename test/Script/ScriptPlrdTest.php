<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptPlrd;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptPlrdTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPlrd();

        self::assertSame('Plrd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('282', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Miao', $script->unicodeName());
    }
}
