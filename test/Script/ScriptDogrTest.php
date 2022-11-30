<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptDogr;
use PHPUnit\Framework\TestCase;

class ScriptDogrTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptDogr();

        self::assertSame('Dogr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('328', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Dogra', $script->unicodeName());
    }
}
