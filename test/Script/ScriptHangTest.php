<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptHang;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptHangTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHang();

        self::assertSame('Hang', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('286', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hangul', $script->unicodeName());
    }
}
