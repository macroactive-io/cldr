<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSogo;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSogoTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSogo();

        self::assertSame('Sogo', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('142', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Sogdian', $script->unicodeName());
    }
}
