<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptEgyh;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptEgyhTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptEgyh();

        self::assertSame('Egyh', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('060', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
