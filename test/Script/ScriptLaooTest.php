<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptLaoo;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptLaooTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLaoo();

        self::assertSame('Laoo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame(['໐', '໑', '໒', '໓', '໔', '໕', '໖', '໗', '໘', '໙'], $script->numerals());
        self::assertSame('Lao', $script->unicodeName());
    }
}
