<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptSyrc;
use PHPUnit\Framework\TestCase;

class LanguageSyrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSyr();

        self::assertSame(ScriptSyrc::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('syr', $language->code());
    }
}
