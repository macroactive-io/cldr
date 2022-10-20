<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule15;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageIsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageIs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule15::class, $language->pluralRule()::class);
        self::assertSame('is', $language->code());
    }
}
