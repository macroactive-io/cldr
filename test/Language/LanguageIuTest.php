<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptCans;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageIu class
 *
 * @coversNothing
 */
class LanguageIuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageIu();

        self::assertEquals(new ScriptCans(), $language->defaultScript());
        self::assertEquals(new PluralRuleOneTwoOther(), $language->pluralRule());
        self::assertSame('iu', $language->code());
    }
}
