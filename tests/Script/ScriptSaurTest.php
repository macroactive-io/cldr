<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptSaur;
use PHPUnit\Framework\TestCase;

class ScriptSaurTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSaur();

        self::assertSame('Saur', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('344', $script->number());
        self::assertSame(['꣐', '꣑', '꣒', '꣓', '꣔', '꣕', '꣖', '꣗', '꣘', '꣙'], $script->numerals());
        self::assertSame('Saurashtra', $script->unicodeName());
    }
}
