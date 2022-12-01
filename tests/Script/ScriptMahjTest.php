<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptMahj;
use PHPUnit\Framework\TestCase;

class ScriptMahjTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMahj();

        self::assertSame('Mahj', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('314', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Mahajani', $script->unicodeName());
    }
}
