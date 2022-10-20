<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptGeor;
use PHPUnit\Framework\TestCase;

class LanguageKaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKa();

        self::assertSame(ScriptGeor::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('ka', $language->code());
    }
}
