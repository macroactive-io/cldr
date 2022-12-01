<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptUgar;
use PHPUnit\Framework\TestCase;

class ScriptUgarTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptUgar();

        self::assertSame('Ugar', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('040', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Ugaritic', $script->unicodeName());
    }
}
