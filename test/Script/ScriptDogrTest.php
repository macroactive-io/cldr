<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDogrTest class
 *
 * @coversNothing
 */
class ScriptDogrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptDogr();

        self::assertSame('Dogr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('328', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Dogra', $script->unicodeName());
    }
}
