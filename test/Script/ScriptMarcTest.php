<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptMarc;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptMarcTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMarc();

        self::assertSame('Marc', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('332', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Marchen', $script->unicodeName());
    }
}
