<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptGeor;
use PHPUnit\Framework\TestCase;

class ScriptGeorTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptGeor();

        self::assertSame('Geor', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('240', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Georgian', $script->unicodeName());
    }
}
