<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptMlym;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMl class
 *
 * @coversNothing
 */
class LanguageMlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageMl();

        self::assertEquals(new ScriptMlym(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('ml', $language->code());
    }
}
