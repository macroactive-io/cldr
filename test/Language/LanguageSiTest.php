<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptSinh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSi class
 *
 * @coversNothing
 */
class LanguageSiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSi();

        self::assertEquals(new ScriptSinh(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('si', $language->code());
    }
}
