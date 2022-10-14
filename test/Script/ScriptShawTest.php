<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptShaw class
 *
 * @coversNothing
 */
class ScriptShawTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptShaw();

        self::assertSame('Shaw', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('281', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Shavian', $script->unicodeName());
    }
}
