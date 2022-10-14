<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptArmn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageHy class
 *
 * @coversNothing
 */
class LanguageHyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageHy();

        self::assertEquals(new ScriptArmn(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('hy', $language->code());
    }
}
