<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptGlag;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptGlagTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptGlag();

        self::assertSame('Glag', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('225', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Glagolitic', $script->unicodeName());
    }
}
