<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptNagm;

use Macroactive\Cldr\Script\ScriptDirection;

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
