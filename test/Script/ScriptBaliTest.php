<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBali class
 *
 * @coversNothing
 */
class ScriptBaliTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBali();

        self::assertSame('Bali', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('360', $script->number());
        self::assertSame(['᭐', '᭑', '᭒', '᭓', '᭔', '᭕', '᭖', '᭗', '᭘', '᭙'], $script->numerals());
        self::assertSame('Balinese', $script->unicodeName());
    }
}
