<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptGujr;
use PHPUnit\Framework\TestCase;

class ScriptGujrTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptGujr();

        self::assertSame('Gujr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('320', $script->number());
        self::assertSame(['૦', '૧', '૨', '૩', '૪', '૫', '૬', '૭', '૮', '૯'], $script->numerals());
        self::assertSame('Gujarati', $script->unicodeName());
    }
}
