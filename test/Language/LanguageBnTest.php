<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptBeng;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageBn class
 *
 * @coversNothing
 */
class LanguageBnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageBn();

        self::assertEquals(new ScriptBeng(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('bn', $language->code());
    }
}
