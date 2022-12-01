<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptCyrs;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

class ScriptCyrsTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCyrs();

        self::assertSame('Cyrs', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('221', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
