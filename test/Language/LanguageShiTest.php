<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRuleTachelhit;
use Macroactive\Cldr\Script\ScriptTfng;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageShi;

class LanguageShiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageShi();

        self::assertSame(ScriptTfng::class, $language->defaultScript()::class);
        self::assertSame('shi', $language->code());
    }
}
