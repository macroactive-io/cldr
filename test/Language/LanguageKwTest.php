<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRuleCornish;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageKw;

class LanguageKwTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKw();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('kw', $language->code());
    }
}
