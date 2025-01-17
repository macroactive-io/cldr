<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptSinh;
use PHPUnit\Framework\TestCase;

class ScriptSinhTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSinh();

        self::assertSame('Sinh', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('348', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Sinhala', $script->unicodeName());
    }
}
