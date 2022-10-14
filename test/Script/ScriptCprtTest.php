<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCprt class
 *
 * @coversNothing
 */
class ScriptCprtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCprt();

        self::assertSame('Cprt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('403', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cypriot', $script->unicodeName());
    }
}
