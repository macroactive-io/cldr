<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptEthi;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptEthiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptEthi();

        self::assertSame('Ethi', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('430', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Ethiopic', $script->unicodeName());
    }
}
