<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptAran;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptAranTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptAran();

        self::assertSame('Aran', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('161', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
