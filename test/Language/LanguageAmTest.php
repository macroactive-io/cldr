<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptEthi;
use PHPUnit\Framework\TestCase;

class LanguageAmTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAm();

        self::assertSame(ScriptEthi::class, $language->defaultScript()::class);
        self::assertSame(PluralRule2::class, $language->pluralRule()::class);
        self::assertSame('am', $language->code());
    }
}
