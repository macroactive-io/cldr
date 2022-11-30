<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptKore;
use PHPUnit\Framework\TestCase;

class ScriptKoreTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptKore();

        self::assertSame('Kore', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('287', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
