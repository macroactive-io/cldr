<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule4;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageGdTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGd();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule4::class, $language->pluralRule()::class);
        self::assertSame('gd', $language->code());
    }
}
