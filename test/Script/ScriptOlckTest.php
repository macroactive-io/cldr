<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOlck class
 *
 * @coversNothing
 */
class ScriptOlckTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptOlck();

        self::assertSame('Olck', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('261', $script->number());
        self::assertSame(['᱐', '᱑', '᱒', '᱓', '᱔', '᱕', '᱖', '᱗', '᱘', '᱙'], $script->numerals());
        self::assertSame('Ol_Chiki', $script->unicodeName());
    }
}
