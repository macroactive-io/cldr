<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptCari;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

class ScriptCariTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCari();

        self::assertSame('Cari', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('201', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Carian', $script->unicodeName());
    }
}
