<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptZxxx;
use PHPUnit\Framework\TestCase;

class ScriptZxxxTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptZxxx();

        self::assertSame('Zxxx', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('997', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
