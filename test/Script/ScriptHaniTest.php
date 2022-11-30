<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptHani;
use PHPUnit\Framework\TestCase;

class ScriptHaniTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHani();

        self::assertSame('Hani', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('500', $script->number());
        self::assertSame(['〇', '一', '二', '三', '四', '五', '六', '七', '八', '九'], $script->numerals());
        self::assertSame('Han', $script->unicodeName());
    }
}
