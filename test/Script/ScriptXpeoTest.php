<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptXpeo;
use PHPUnit\Framework\TestCase;

class ScriptXpeoTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptXpeo();

        self::assertSame('Xpeo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('030', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Persian', $script->unicodeName());
    }
}
