<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

class LanguageHiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageHi();

        self::assertSame(ScriptDeva::class, $language->defaultScript()::class);
        self::assertSame(PluralRule2::class, $language->pluralRule()::class);
        self::assertSame('hi', $language->code());
    }
}
