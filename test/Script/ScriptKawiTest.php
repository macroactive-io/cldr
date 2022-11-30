<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptKawi;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptKawiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKawi();

        self::assertSame('Kawi', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('368', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
