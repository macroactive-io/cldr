<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptDiak;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptDiakTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptDiak();

        self::assertSame('Diak', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('342', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Dives_Akuru', $script->unicodeName());
    }
}
