<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptTagb;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptTagbTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTagb();

        self::assertSame('Tagb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('373', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tagbanwa', $script->unicodeName());
    }
}
