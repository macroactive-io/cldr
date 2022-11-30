<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptRunr;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptRunrTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptRunr();

        self::assertSame('Runr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('211', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Runic', $script->unicodeName());
    }
}
