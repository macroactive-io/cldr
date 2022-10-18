<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptEthi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageTi class
 *
 * @coversNothing
 */
class LanguageTiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageTi();

        self::assertEquals(new ScriptEthi(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('ti', $language->code());
    }
}
