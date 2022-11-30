<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptShaw;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptShawTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptShaw();

        self::assertSame('Shaw', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('281', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Shavian', $script->unicodeName());
    }
}
