<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSyrj;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSyrjTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSyrj();

        self::assertSame('Syrj', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('137', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
