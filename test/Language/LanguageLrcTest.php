<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMzn class
 *
 * @coversNothing
 */
class LanguageLrcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageLrc();

        self::assertEquals(new ScriptArab(), $language->defaultScript());
        self::assertEquals(new PluralRule12(), $language->pluralRule());
        self::assertSame('lrc', $language->code());
    }
}
