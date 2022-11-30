<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSyrn;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSyrnTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSyrn();

        self::assertSame('Syrn', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('136', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
