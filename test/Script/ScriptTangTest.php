<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptTang;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptTangTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTang();

        self::assertSame('Tang', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('520', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tangut', $script->unicodeName());
    }
}
