<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptCans;

use Macroactive\Cldr\Script\ScriptDirection;

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
