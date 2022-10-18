<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptCakm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageCcp class
 *
 * @coversNothing
 */
class LanguageCcpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageCcp();

        self::assertEquals(new ScriptCakm(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('ccp', $language->code());
    }
}
