<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptKthi;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptKthiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKthi();

        self::assertSame('Kthi', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('317', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Kaithi', $script->unicodeName());
    }
}
