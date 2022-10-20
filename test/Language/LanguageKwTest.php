<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleCornish;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKwTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKw();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRuleCornish::class, $language->pluralRule()::class);
        self::assertSame('kw', $language->code());
    }
}
