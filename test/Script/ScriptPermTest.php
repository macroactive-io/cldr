<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptPermTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPerm();

        self::assertSame('Perm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('227', $script->number());
        self::assertSame([], $script->numerals());
    }
}
