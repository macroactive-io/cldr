<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHmng class
 *
 * @coversNothing
 */
class ScriptHmngTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHmng();

        self::assertSame('Hmng', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('450', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Pahawh_Hmong', $script->unicodeName());
    }
}
