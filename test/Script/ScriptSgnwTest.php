<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSgnw;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSgnwTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSgnw();

        self::assertSame('Sgnw', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('095', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('SignWriting', $script->unicodeName());
    }
}
