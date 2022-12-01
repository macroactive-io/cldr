<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptEgyd;
use PHPUnit\Framework\TestCase;

class ScriptEgydTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptEgyd();

        self::assertSame('Egyd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('070', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
