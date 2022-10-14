<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLaoo class
 *
 * @coversNothing
 */
class ScriptLaooTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLaoo();

        self::assertSame('Laoo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame(['໐', '໑', '໒', '໓', '໔', '໕', '໖', '໗', '໘', '໙'], $script->numerals());
        self::assertSame('Lao', $script->unicodeName());
    }
}
