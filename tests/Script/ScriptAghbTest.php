<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptAghb;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

class ScriptAghbTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptAghb();

        self::assertSame('Aghb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('239', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Caucasian_Albanian', $script->unicodeName());
    }
}
