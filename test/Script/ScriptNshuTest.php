<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptNshu;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptNshuTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptNshu();

        self::assertSame('Nshu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('499', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Nushu', $script->unicodeName());
    }
}
