<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGrek;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageEl class
 *
 * @coversNothing
 */
class LanguageElTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageEl();

        self::assertEquals(new ScriptGrek(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('el', $language->code());
    }
}
