<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptAran;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

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
