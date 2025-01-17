<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptGrek;
use PHPUnit\Framework\TestCase;

class ScriptGrekTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptGrek();

        self::assertSame('Grek', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame([], $script->numerals());
        self::assertSame('Greek', $script->unicodeName());
    }
}
