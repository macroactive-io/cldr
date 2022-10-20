<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule3;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguagePrgTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguagePrg();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule3::class, $language->pluralRule()::class);
        self::assertSame('prg', $language->code());
    }
}
