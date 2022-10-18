<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageDav class
 *
 * @coversNothing
 */
class LanguageDavTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageDav();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('dav', $language->code());
    }
}
