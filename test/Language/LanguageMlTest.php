<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptMlym;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMl class
 *
 * @coversNothing
 */
class LanguageMlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageMl();

        self::assertEquals(new ScriptMlym(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('ml', $language->code());
    }
}
