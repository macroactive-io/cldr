<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptSyre;
use PHPUnit\Framework\TestCase;

class ScriptSyreTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSyre();

        self::assertSame('Syre', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('138', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
