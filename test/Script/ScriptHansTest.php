<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptHans;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptHansTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHans();

        self::assertSame('Hans', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('501', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
