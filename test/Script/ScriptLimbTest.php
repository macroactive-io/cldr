<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptLimb;
use PHPUnit\Framework\TestCase;

class ScriptLimbTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptLimb();

        self::assertSame('Limb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('336', $script->number());
        self::assertSame(['᥆', '᥇', '᥈', '᥉', '᥊', '᥋', '᥌', '᥍', '᥎', '᥏'], $script->numerals());
        self::assertSame('Limbu', $script->unicodeName());
    }
}
