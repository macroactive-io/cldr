<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptBuhd;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

class ScriptBuhdTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBuhd();

        self::assertSame('Buhd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('372', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Buhid', $script->unicodeName());
    }
}
