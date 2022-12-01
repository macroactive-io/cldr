<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptEthi;
use PHPUnit\Framework\TestCase;

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
