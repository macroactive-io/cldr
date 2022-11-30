<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptLana;
use PHPUnit\Framework\TestCase;

class ScriptLanaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLana();

        self::assertSame('Lana', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('351', $script->number());
        self::assertSame(['᪀', '᪁', '᪂', '᪃', '᪄', '᪅', '᪆', '᪇', '᪈', '᪉'], $script->numerals());
        self::assertSame('Tai_Tham', $script->unicodeName());
    }
}
