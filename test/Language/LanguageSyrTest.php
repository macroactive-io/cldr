<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptSyrc;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSyr class
 *
 * @coversNothing
 */
class LanguageSyrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSyr();

        self::assertEquals(new ScriptSyrc(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('syr', $language->code());
    }
}
