<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptMtei;
use PHPUnit\Framework\TestCase;

class ScriptMteiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMtei();

        self::assertSame('Mtei', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('337', $script->number());
        self::assertSame(['꯰', '꯱', '꯲', '꯳', '꯴', '꯵', '꯶', '꯷', '꯸', '꯹'], $script->numerals());
        self::assertSame('Meetei_Mayek', $script->unicodeName());
    }
}
