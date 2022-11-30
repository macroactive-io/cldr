<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptGonm;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptGonmTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptGonm();

        self::assertSame('Gonm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('313', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Masaram_Gondi', $script->unicodeName());
    }
}
