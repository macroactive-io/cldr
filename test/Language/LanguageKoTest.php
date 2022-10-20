<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptKore;
use PHPUnit\Framework\TestCase;

class LanguageKoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKo();

        self::assertSame(ScriptKore::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('ko', $language->code());
    }
}
