<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptTnsa;
use PHPUnit\Framework\TestCase;

class ScriptTnsaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTnsa();

        self::assertSame('Tnsa', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('275', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tangsa', $script->unicodeName());
    }
}
