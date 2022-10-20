<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule9;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguagePlTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguagePl();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule9::class, $language->pluralRule()::class);
        self::assertSame('pl', $language->code());
    }
}
