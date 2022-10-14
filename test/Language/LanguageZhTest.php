<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptHans;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageZh class
 *
 * @coversNothing
 */
class LanguageZhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageZh();

        self::assertEquals(new ScriptHans(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('zh', $language->code());
    }
}
