<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptMedf;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptMedfTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMedf();

        self::assertSame('Medf', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('265', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Medefaidrin', $script->unicodeName());
    }
}
