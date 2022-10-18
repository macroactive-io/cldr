<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMong class
 *
 * @coversNothing
 */
class ScriptMongTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMong();

        self::assertSame('Mong', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('145', $script->number());
        self::assertSame(['᠐', '᠑', '᠒', '᠓', '᠔', '᠕', '᠖', '᠗', '᠘', '᠙'], $script->numerals());
        self::assertSame('Mongolian', $script->unicodeName());
    }
}
