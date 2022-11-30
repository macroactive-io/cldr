<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptZsym;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptZsymTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptZsym();

        self::assertSame('Zsym', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('996', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
