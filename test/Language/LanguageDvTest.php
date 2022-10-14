<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptThaa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageDv class
 *
 * @coversNothing
 */
class LanguageDvTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageDv();

        self::assertEquals(new ScriptThaa(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('dv', $language->code());
    }
}
