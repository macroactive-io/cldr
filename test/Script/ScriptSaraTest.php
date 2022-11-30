<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSara;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSaraTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSara();

        self::assertSame('Sara', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('292', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
