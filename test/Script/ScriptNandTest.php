<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptNand;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptNandTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptNand();

        self::assertSame('Nand', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('311', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Nandinagari', $script->unicodeName());
    }
}
