<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptPrtiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPrti();

        self::assertSame('Prti', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('130', $script->number());
        self::assertSame('Inscriptional_Parthian', $script->unicodeName());
        self::assertSame([], $script->numerals());
    }
}
