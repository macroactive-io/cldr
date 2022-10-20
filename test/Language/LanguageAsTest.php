<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptBeng;
use PHPUnit\Framework\TestCase;

class LanguageAsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAs();

        self::assertSame(ScriptBeng::class, $language->defaultScript()::class);
        self::assertSame(PluralRule2::class, $language->pluralRule()::class);
        self::assertSame('as', $language->code());
    }
}
