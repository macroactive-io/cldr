<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptKore;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKo class
 *
 * @coversNothing
 */
class LanguageKoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKo();

        self::assertEquals(new ScriptKore(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('ko', $language->code());
    }
}
