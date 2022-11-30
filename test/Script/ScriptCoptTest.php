<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptCopt;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

class ScriptCoptTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCopt();

        self::assertSame('Copt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('204', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Coptic', $script->unicodeName());
    }
}
