<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptSund;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSu class
 *
 * @coversNothing
 */
class LanguageSuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSu();

        self::assertEquals(new ScriptSund(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('su', $language->code());
    }
}
