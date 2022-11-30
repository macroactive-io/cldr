<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptBlis;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptBlisTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBlis();

        self::assertSame('Blis', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('550', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
