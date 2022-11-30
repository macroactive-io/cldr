<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptLinb;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptLinbTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLinb();

        self::assertSame('Linb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('401', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Linear_B', $script->unicodeName());
    }
}
