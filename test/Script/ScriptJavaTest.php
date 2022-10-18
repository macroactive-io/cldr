<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptJava class
 *
 * @coversNothing
 */
class ScriptJavaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptJava();

        self::assertSame('Java', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('361', $script->number());
        self::assertSame(['꧐', '꧑', '꧒', '꧓', '꧔', '꧕', '꧖', '꧗', '꧘', '꧙'], $script->numerals());
        self::assertSame('Javanese', $script->unicodeName());
    }
}
