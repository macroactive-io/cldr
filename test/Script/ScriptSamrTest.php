<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptSamr;
use PHPUnit\Framework\TestCase;

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
