<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleZeroOneOther;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKshTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKsh();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRuleZeroOneOther::class, $language->pluralRule()::class);
        self::assertSame('ksh', $language->code());
    }
}
