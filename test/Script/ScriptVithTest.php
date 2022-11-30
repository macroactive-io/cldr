<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptVith;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptVithTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptVith();

        self::assertSame('Vith', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('228', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Vithkuqi', $script->unicodeName());
    }
}
