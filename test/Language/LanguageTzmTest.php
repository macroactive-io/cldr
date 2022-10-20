<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleCentralAtlasTamazight;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageTzmTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTzm();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRuleCentralAtlasTamazight::class, $language->pluralRule()::class);
        self::assertSame('tzm', $language->code());
    }
}
