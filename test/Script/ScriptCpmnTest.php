<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptCpmn;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptCpmnTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCpmn();

        self::assertSame('Cpmn', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('402', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cypro_Minoan', $script->unicodeName());
    }
}
