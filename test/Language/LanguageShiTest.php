<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleTachelhit;
use Macroactive\Cldr\Script\ScriptTfng;
use PHPUnit\Framework\TestCase;

class LanguageShiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageShi();

        self::assertSame(ScriptTfng::class, $language->defaultScript()::class);
        self::assertSame(PluralRuleTachelhit::class, $language->pluralRule()::class);
        self::assertSame('shi', $language->code());
    }
}
