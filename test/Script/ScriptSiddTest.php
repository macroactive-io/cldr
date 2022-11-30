<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSidd;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSiddTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSidd();

        self::assertSame('Sidd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('302', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Siddham', $script->unicodeName());
    }
}
