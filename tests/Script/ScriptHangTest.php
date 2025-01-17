<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptHang;
use PHPUnit\Framework\TestCase;

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
