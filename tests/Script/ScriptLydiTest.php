<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptLydi;
use PHPUnit\Framework\TestCase;

class ScriptLydiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLydi();

        self::assertSame('Lydi', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('116', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Lydian', $script->unicodeName());
    }
}
