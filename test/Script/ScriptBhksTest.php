<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptBhks;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptBhksTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBhks();

        self::assertSame('Bhks', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('334', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Bhaiksuki', $script->unicodeName());
    }
}
