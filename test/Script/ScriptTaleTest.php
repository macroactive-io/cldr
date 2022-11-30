<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptTale;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptTaleTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTale();

        self::assertSame('Tale', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('353', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tai_Le', $script->unicodeName());
    }
}
