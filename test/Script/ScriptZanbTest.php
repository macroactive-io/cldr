<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptZanb;
use PHPUnit\Framework\TestCase;

class ScriptZanbTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptZanb();

        self::assertSame('Zanb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('339', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Zanabazar_Square', $script->unicodeName());
    }
}
