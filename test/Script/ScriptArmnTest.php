<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptArmn;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptArmnTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptArmn();

        self::assertSame('Armn', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('230', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Armenian', $script->unicodeName());
    }
}
