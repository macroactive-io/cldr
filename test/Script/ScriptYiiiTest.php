<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptYiii;
use PHPUnit\Framework\TestCase;

class ScriptYiiiTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptYiii();

        self::assertSame('Yiii', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('460', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Yi', $script->unicodeName());
    }
}
