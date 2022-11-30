<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class ScriptLatnTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLatn();

        self::assertSame('Latn', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('215', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Latin', $script->unicodeName());
    }
}
