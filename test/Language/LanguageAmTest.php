<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptEthi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageAm class
 *
 * @coversNothing
 */
class LanguageAmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageAm();

        self::assertEquals(new ScriptEthi(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('am', $language->code());
    }
}
