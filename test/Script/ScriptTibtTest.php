<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTibt class
 *
 * @coversNothing
 */
class ScriptTibtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTibt();

        self::assertSame('Tibt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('330', $script->number());
        self::assertSame(['༠', '༡', '༢', '༣', '༤', '༥', '༦', '༧', '༨', '༩'], $script->numerals());
        self::assertSame('Tibetan', $script->unicodeName());
    }
}
