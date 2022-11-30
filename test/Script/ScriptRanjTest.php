<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptRanj;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptRanjTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptRanj();

        self::assertSame('Ranj', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('303', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
