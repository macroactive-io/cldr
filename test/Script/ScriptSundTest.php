<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSund;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSundTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSund();

        self::assertSame('Sund', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('362', $script->number());
        self::assertSame(['᮰', '᮱', '᮲', '᮳', '᮴', '᮵', '᮶', '᮷', '᮸', '᮹'], $script->numerals());
        self::assertSame('Sundanese', $script->unicodeName());
    }
}
