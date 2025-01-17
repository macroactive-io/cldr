<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptCans;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

class ScriptCansTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCans();

        self::assertSame('Cans', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('440', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Canadian_Aboriginal', $script->unicodeName());
    }
}
