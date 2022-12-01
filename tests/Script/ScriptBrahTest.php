<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use Macroactive\Cldr\Script\ScriptBrah;
use Macroactive\Cldr\Script\ScriptDirection;
use PHPUnit\Framework\TestCase;

class ScriptBrahTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptBrah();

        self::assertSame('Brah', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('300', $script->number());
        self::assertSame(['𑁦', '𑁧', '𑁨', '𑁩', '𑁪', '𑁫', '𑁬', '𑁭', '𑁮', '𑁯'], $script->numerals());
        self::assertSame('Brahmi', $script->unicodeName());
    }
}
