<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleManx;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageGvTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGv();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRuleManx::class, $language->pluralRule()::class);
        self::assertSame('gv', $language->code());
    }
}
