<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptHebr;
use PHPUnit\Framework\TestCase;

class LanguageYiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageYi();

        self::assertSame(ScriptHebr::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('yi', $language->code());
    }
}
