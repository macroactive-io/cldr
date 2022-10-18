<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKnda class
 *
 * @coversNothing
 */
class ScriptKndaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKnda();

        self::assertSame('Knda', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('345', $script->number());
        self::assertSame(['೦', '೧', '೨', '೩', '೪', '೫', '೬', '೭', '೮', '೯'], $script->numerals());
        self::assertSame('Kannada', $script->unicodeName());
    }
}
