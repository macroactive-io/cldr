<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageUr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageUrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageUr();

        self::assertEquals(new ScriptArab(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('ur', $language->code());
    }
}
