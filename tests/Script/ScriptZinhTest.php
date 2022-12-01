<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptZinh;
use PHPUnit\Framework\TestCase;

class ScriptZinhTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptZinh();

        self::assertSame('Zinh', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('994', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Inherited', $script->unicodeName());
    }
}
