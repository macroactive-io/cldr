<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptMarc;
use PHPUnit\Framework\TestCase;

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
