<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptAvst;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptAvstTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptAvst();

        self::assertSame('Avst', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('134', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Avestan', $script->unicodeName());
    }
}
