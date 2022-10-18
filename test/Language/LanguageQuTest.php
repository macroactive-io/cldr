<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageQu class
 *
 * @coversNothing
 */
class LanguageQuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageQu();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('qu', $language->code());
    }
}
