<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptZzzz;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptZzzzTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptZzzz();

        self::assertSame('Zzzz', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('999', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Unknown', $script->unicodeName());
    }
}
