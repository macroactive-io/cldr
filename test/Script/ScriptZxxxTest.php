<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZxxx class
 *
 * @coversNothing
 */
class ScriptZxxxTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZxxx();

        self::assertSame('Zxxx', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('997', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
