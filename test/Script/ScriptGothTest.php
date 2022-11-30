<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptGoth;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptGothTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptGoth();

        self::assertSame('Goth', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('206', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Gothic', $script->unicodeName());
    }
}
