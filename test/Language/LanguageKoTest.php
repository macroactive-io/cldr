<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKore;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKo class
 *
 * @coversNothing
 */
class LanguageKoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKo();

        self::assertEquals(new ScriptKore(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('ko', $language->code());
    }
}
