<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptShui;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptShuiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptShui();

        self::assertSame('Shui', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('530', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
