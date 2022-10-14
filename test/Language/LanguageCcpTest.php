<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptCakm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageCcp class
 *
 * @coversNothing
 */
class LanguageCcpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageCcp();

        self::assertEquals(new ScriptCakm(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('ccp', $language->code());
    }
}
