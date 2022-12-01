<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptSara;
use PHPUnit\Framework\TestCase;

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
