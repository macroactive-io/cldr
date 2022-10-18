<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptThai;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageTh class
 *
 * @coversNothing
 */
class LanguageThTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageTh();

        self::assertEquals(new ScriptThai(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('th', $language->code());
    }
}
