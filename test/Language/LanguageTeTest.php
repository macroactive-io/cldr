<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTelu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageTe class
 *
 * @coversNothing
 */
class LanguageTeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageTe();

        self::assertEquals(new ScriptTelu(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('te', $language->code());
    }
}
