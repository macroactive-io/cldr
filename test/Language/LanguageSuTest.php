<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptSund;
use PHPUnit\Framework\TestCase;

class LanguageSuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSu();

        self::assertSame(ScriptSund::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('su', $language->code());
    }
}
