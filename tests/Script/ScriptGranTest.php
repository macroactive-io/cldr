<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptGran;
use PHPUnit\Framework\TestCase;

class ScriptGranTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptGran();

        self::assertSame('Gran', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('343', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Grantha', $script->unicodeName());
    }
}
