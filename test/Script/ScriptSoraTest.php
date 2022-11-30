<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptSora;
use PHPUnit\Framework\TestCase;

class ScriptSoraTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSora();

        self::assertSame('Sora', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('398', $script->number());
        self::assertSame(['𑃰', '𑃱', '𑃲', '𑃳', '𑃴', '𑃵', '𑃶', '𑃷', '𑃸', '𑃹'], $script->numerals());
        self::assertSame('Sora_Sompeng', $script->unicodeName());
    }
}
