<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageYoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageYo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('yo', $language->code());
    }
}
