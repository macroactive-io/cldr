<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGongTest class
 *
 * @coversNothing
 */
class ScriptGongTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGong();

        self::assertSame('Gong', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('312', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Gunjala_Gondi', $script->unicodeName());
    }
}
