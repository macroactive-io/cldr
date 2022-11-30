<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptKits;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptKitsTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKits();

        self::assertSame('Kits', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('288', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Khitan_Small_Script', $script->unicodeName());
    }
}
