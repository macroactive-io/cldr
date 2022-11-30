<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptCyrl;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptCyrlTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCyrl();

        self::assertSame('Cyrl', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('220', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cyrillic', $script->unicodeName());
    }
}
