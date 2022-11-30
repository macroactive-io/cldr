<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptBamu;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

class ScriptBamuTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBamu();

        self::assertSame('Bamu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('435', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Bamum', $script->unicodeName());
    }
}
