<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptZsye;
use PHPUnit\Framework\TestCase;

class ScriptZsyeTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptZsye();

        self::assertSame('Zsye', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('993', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
