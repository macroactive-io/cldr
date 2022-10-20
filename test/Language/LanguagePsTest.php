<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

class LanguagePsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguagePs();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('ps', $language->code());
    }
}
