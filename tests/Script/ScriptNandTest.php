<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptNand;
use PHPUnit\Framework\TestCase;

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
