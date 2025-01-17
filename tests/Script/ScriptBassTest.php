<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptBass;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

class ScriptBassTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBass();

        self::assertSame('Bass', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('259', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Bassa_Vah', $script->unicodeName());
    }
}
