<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBrah class
 *
 * @coversNothing
 */
class ScriptBrahTest extends TestCase
{
    /**
     * Test the properties
     */
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
