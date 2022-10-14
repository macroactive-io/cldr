<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptNkoo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageNqo class
 *
 * @coversNothing
 */
class LanguageNqoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageNqo();

        self::assertEquals(new ScriptNkoo(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('nqo', $language->code());
    }
}
