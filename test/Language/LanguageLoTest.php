<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLaoo;
use PHPUnit\Framework\TestCase;

class LanguageLoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLo();

        self::assertSame(ScriptLaoo::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('lo', $language->code());
    }
}
