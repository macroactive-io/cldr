<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageYav class
 *
 * @coversNothing
 */
class LanguageYavTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageYav();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('yav', $language->code());
    }
}
