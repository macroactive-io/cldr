<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptDupl;
use PHPUnit\Framework\TestCase;

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
