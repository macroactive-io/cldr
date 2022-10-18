<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptGujr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageGu class
 *
 * @coversNothing
 */
class LanguageGuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageGu();

        self::assertEquals(new ScriptGujr(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('gu', $language->code());
    }
}
