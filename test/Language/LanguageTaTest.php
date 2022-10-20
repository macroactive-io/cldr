<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTaml;
use PHPUnit\Framework\TestCase;

class LanguageTaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTa();

        self::assertSame(ScriptTaml::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('ta', $language->code());
    }
}
