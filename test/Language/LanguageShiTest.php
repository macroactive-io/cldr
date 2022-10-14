<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleTachelhit;
use Fisharebest\Localization\Script\ScriptTfng;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageShi class
 *
 * @coversNothing
 */
class LanguageShiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageShi();

        self::assertEquals(new ScriptTfng(), $language->defaultScript());
        self::assertEquals(new PluralRuleTachelhit(), $language->pluralRule());
        self::assertSame('shi', $language->code());
    }
}
