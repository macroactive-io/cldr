<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKhmr class
 *
 * @coversNothing
 */
class ScriptKhmrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKhmr();

        self::assertSame('Khmr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('355', $script->number());
        self::assertSame(['០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'], $script->numerals());
        self::assertSame('Khmer', $script->unicodeName());
    }
}
