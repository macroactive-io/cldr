<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptBeng;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageBn class
 *
 * @coversNothing
 */
class LanguageBnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageBn();

        self::assertEquals(new ScriptBeng(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('bn', $language->code());
    }
}
