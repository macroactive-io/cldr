<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptPerm;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptPermTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptPerm();

        self::assertSame('Perm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('227', $script->number());
        self::assertSame([], $script->numerals());
    }
}
