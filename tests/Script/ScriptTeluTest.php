<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptTelu;
use PHPUnit\Framework\TestCase;

class ScriptTeluTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTelu();

        self::assertSame('Telu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('340', $script->number());
        self::assertSame(['౦', '౧', '౨', '౩', '౪', '౫', '౬', '౭', '౮', '౯'], $script->numerals());
        self::assertSame('Telugu', $script->unicodeName());
    }
}
