<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptMaya;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptMayaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMaya();

        self::assertSame('Maya', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('090', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
