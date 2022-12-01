<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptXsux;
use PHPUnit\Framework\TestCase;

class ScriptXsuxTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptXsux();

        self::assertSame('Xsux', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('020', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cuneiform', $script->unicodeName());
    }
}
