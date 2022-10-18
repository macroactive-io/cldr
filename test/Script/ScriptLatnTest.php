<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLatn class
 *
 * @coversNothing
 */
class ScriptLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLatn();

        self::assertSame('Latn', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('215', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Latin', $script->unicodeName());
    }
}
