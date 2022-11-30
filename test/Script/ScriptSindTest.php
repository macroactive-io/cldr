<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptSind;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptSindTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSind();

        self::assertSame('Sind', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('318', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Khudawadi', $script->unicodeName());
    }
}
