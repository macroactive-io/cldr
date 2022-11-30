<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptJpan;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptJpanTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptJpan();

        self::assertSame('Jpan', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('413', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
