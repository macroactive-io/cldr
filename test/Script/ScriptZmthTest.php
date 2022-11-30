<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptZmth;
use PHPUnit\Framework\TestCase;

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
