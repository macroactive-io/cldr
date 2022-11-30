<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptLatg;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptLatgTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLatg();

        self::assertSame('Latg', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('216', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
