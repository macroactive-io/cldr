<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSr class
 *
 * @coversNothing
 */
class LanguageSrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSr();

        self::assertEquals(new ScriptCyrl(), $language->defaultScript());
        self::assertEquals(new PluralRule7(), $language->pluralRule());
        self::assertSame('sr', $language->code());
    }
}
