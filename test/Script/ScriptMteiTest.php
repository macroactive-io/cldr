<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMtei class
 *
 * @coversNothing
 */
class ScriptMteiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMtei();

        self::assertSame('Mtei', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('337', $script->number());
        self::assertSame(['꯰', '꯱', '꯲', '꯳', '꯴', '꯵', '꯶', '꯷', '꯸', '꯹'], $script->numerals());
        self::assertSame('Meetei_Mayek', $script->unicodeName());
    }
}
