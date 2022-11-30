<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptInds;
use PHPUnit\Framework\TestCase;

class ScriptIndsTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptInds();

        self::assertSame('Inds', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('610', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
