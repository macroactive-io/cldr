<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptTibt;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptTibtTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTibt();

        self::assertSame('Tibt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('330', $script->number());
        self::assertSame(['༠', '༡', '༢', '༣', '༤', '༥', '༦', '༧', '༨', '༩'], $script->numerals());
        self::assertSame('Tibetan', $script->unicodeName());
    }
}
