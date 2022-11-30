<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptWole;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptWoleTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptWole();

        self::assertSame('Wole', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('480', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
