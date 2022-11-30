<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptPhlv;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptPhlvTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPhlv();

        self::assertSame('Phlv', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('133', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
