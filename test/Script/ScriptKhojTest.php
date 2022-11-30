<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptKhoj;
use PHPUnit\Framework\TestCase;

class ScriptKhojTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKhoj();

        self::assertSame('Khoj', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('322', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Khojki', $script->unicodeName());
    }
}
