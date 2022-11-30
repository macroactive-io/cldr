<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptBamu;

use Macroactive\Cldr\Script\ScriptDirection;

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
