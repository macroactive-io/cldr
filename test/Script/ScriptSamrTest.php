<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSamr;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSamrTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSamr();

        self::assertSame('Samr', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('123', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Samaritan', $script->unicodeName());
    }
}
