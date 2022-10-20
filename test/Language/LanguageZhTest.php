<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptHans;
use PHPUnit\Framework\TestCase;

class LanguageZhTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageZh();

        self::assertSame(ScriptHans::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('zh', $language->code());
    }
}
