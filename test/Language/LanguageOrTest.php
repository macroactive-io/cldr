<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptOrya;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageOr class
 *
 * @coversNothing
 */
class LanguageOrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageOr();

        self::assertEquals(new ScriptOrya(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('or', $language->code());
    }
}
