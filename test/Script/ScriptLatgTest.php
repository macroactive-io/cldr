<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptLatg;
use PHPUnit\Framework\TestCase;

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
