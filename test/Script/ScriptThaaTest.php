<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptThaa;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptThaaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptThaa();

        self::assertSame('Thaa', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('170', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Thaana', $script->unicodeName());
    }
}
