<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptZmth;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptZmthTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptZmth();

        self::assertSame('Zmth', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('995', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
