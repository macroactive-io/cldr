<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSmsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSms();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRuleOneTwoOther::class, $language->pluralRule()::class);
        self::assertSame('sms', $language->code());
    }
}
