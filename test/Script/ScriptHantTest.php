<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptHant;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptHantTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHant();

        self::assertSame('Hant', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('502', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
