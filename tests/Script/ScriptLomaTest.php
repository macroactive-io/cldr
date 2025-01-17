<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptLoma;
use PHPUnit\Framework\TestCase;

class ScriptLomaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLoma();

        self::assertSame('Loma', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('437', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
