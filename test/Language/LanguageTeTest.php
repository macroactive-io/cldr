<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTelu;
use PHPUnit\Framework\TestCase;

class LanguageTeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTe();

        self::assertSame(ScriptTelu::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('te', $language->code());
    }
}
