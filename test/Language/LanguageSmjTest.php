<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageSmj;

class LanguageSmjTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSmj();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('smj', $language->code());
    }
}
