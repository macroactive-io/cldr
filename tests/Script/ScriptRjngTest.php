<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptRjng;
use PHPUnit\Framework\TestCase;

class ScriptRjngTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptRjng();

        self::assertSame('Rjng', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('363', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Rejang', $script->unicodeName());
    }
}
