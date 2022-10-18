<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSind class
 *
 * @coversNothing
 */
class ScriptSindTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSind();

        self::assertSame('Sind', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('318', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Khudawadi', $script->unicodeName());
    }
}
