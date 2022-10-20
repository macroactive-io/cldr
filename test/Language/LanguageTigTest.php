<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptEthi;
use PHPUnit\Framework\TestCase;

class LanguageTigTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTig();

        self::assertSame(ScriptEthi::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('tig', $language->code());
    }
}
