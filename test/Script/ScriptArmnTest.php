<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptArmn;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

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
