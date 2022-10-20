<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptKhmrTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKhmr();

        self::assertSame('Khmr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('355', $script->number());
        self::assertSame(['០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'], $script->numerals());
        self::assertSame('Khmer', $script->unicodeName());
    }
}
