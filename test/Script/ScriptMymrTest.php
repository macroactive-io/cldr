<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMymr class
 *
 * @coversNothing
 */
class ScriptMymrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMymr();

        self::assertSame('Mymr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('350', $script->number());
        self::assertSame(['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'], $script->numerals());
        self::assertSame('Myanmar', $script->unicodeName());
    }
}
