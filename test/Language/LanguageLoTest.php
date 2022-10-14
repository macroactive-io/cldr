<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLaoo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageLo class
 *
 * @coversNothing
 */
class LanguageLoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageLo();

        self::assertEquals(new ScriptLaoo(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('lo', $language->code());
    }
}
