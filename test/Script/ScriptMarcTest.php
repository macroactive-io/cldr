<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMarc class
 *
 * @coversNothing
 */
class ScriptMarcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMarc();

        self::assertSame('Marc', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('332', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Marchen', $script->unicodeName());
    }
}
