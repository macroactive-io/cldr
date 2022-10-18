<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageUk class
 *
 * @coversNothing
 */
class LanguageUkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageUk();

        self::assertEquals(new ScriptCyrl(), $language->defaultScript());
        self::assertEquals(new PluralRule7(), $language->pluralRule());
        self::assertSame('uk', $language->code());
    }
}
