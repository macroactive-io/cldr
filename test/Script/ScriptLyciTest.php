<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptLyci;
use PHPUnit\Framework\TestCase;

class ScriptLyciTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLyci();

        self::assertSame('Lyci', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('202', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Lycian', $script->unicodeName());
    }
}
