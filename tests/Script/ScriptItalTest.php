<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptItal;
use PHPUnit\Framework\TestCase;

class ScriptItalTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptItal();

        self::assertSame('Ital', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('210', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Italic', $script->unicodeName());
    }
}
