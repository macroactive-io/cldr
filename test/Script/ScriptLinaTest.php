<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptLina;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptLinaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLina();

        self::assertSame('Lina', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('400', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Linear_A', $script->unicodeName());
    }
}
