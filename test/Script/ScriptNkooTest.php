<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptNkoo;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptNkooTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptNkoo();

        self::assertSame('Nkoo', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('165', $script->number());
        self::assertSame(['߀', '߁', '߂', '߃', '߄', '߅', '߆', '߇', '߈', '߉'], $script->numerals());
        self::assertSame('Nko', $script->unicodeName());
    }
}
