<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptGeok;
use PHPUnit\Framework\TestCase;

class ScriptGeokTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptGeok();

        self::assertSame('Geok', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('241', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Georgian', $script->unicodeName());
    }
}
