<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageNe class
 *
 * @coversNothing
 */
class LanguageNeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageNe();

        self::assertEquals(new ScriptDeva(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('ne', $language->code());
    }
}
