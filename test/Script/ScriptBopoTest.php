<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBopo class
 *
 * @coversNothing
 */
class ScriptBopoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBopo();

        self::assertSame('Bopo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('285', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Bopomofo', $script->unicodeName());
    }
}
