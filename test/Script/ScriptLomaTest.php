<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLoma class
 *
 * @coversNothing
 */
class ScriptLomaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLoma();

        self::assertSame('Loma', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('437', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
