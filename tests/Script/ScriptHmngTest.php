<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptHmng;
use PHPUnit\Framework\TestCase;

class ScriptHmngTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptHmng();

        self::assertSame('Hmng', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('450', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Pahawh_Hmong', $script->unicodeName());
    }
}
