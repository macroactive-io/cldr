<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule11;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageGaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGa();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule11::class, $language->pluralRule()::class);
        self::assertSame('ga', $language->code());
    }
}
