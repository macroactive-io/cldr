<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptYezi;
use PHPUnit\Framework\TestCase;

class ScriptYeziTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptYezi();

        self::assertSame('Yezi', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('192', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Yezidi', $script->unicodeName());
    }
}
