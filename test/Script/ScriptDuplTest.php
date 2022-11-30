<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptDupl;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptDuplTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptDupl();

        self::assertSame('Dupl', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('755', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Duployan', $script->unicodeName());
    }
}
