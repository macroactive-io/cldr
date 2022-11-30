<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptZinh;

use Macroactive\Cldr\Script\ScriptDirection;

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
