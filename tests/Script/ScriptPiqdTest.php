<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptPiqd;
use PHPUnit\Framework\TestCase;

class ScriptPiqdTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPiqd();

        self::assertSame('Piqd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('293', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
