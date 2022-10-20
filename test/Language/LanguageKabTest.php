<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKabTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKab();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule2::class, $language->pluralRule()::class);
        self::assertSame('kab', $language->code());
    }
}
