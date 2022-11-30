<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptTirh;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptTirhTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTirh();

        self::assertSame('Tirh', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('326', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tirhuta', $script->unicodeName());
    }
}
