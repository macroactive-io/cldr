<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptKhmr;

use Macroactive\Cldr\Script\ScriptDirection;

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
