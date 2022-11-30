<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptOsma;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptOsmaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptOsma();

        self::assertSame('Osma', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('260', $script->number());
        self::assertSame(['𐒠', '𐒡', '𐒢', '𐒣', '𐒤', '𐒥', '𐒦', '𐒧', '𐒨', '𐒩'], $script->numerals());
        self::assertSame('Osmanya', $script->unicodeName());
    }
}
