<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSn class
 *
 * @coversNothing
 */
class LanguageSnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSn();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('sn', $language->code());
    }
}
