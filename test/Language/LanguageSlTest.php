<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule10;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSlTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSl();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule10::class, $language->pluralRule()::class);
        self::assertSame('sl', $language->code());
    }
}
