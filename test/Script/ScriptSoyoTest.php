<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSoyo;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSoyoTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSoyo();

        self::assertSame('Soyo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('329', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Soyombo', $script->unicodeName());
    }
}
