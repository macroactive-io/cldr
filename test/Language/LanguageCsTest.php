<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule8;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageCsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageCs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule8::class, $language->pluralRule()::class);
        self::assertSame('cs', $language->code());
    }
}
