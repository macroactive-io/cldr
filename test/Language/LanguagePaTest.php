<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptGuru;
use PHPUnit\Framework\TestCase;

class LanguagePaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguagePa();

        self::assertSame(ScriptGuru::class, $language->defaultScript()::class);
        self::assertSame(PluralRule2::class, $language->pluralRule()::class);
        self::assertSame('pa', $language->code());
    }
}
