<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptNagm;
use PHPUnit\Framework\TestCase;

class ScriptNagmTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptNagm();

        self::assertSame('Nagm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('295', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
