<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGeor;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKa class
 *
 * @coversNothing
 */
class LanguageKaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKa();

        self::assertEquals(new ScriptGeor(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('ka', $language->code());
    }
}
