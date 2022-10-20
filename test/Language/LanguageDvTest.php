<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptThaa;
use PHPUnit\Framework\TestCase;

class LanguageDvTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageDv();

        self::assertSame(ScriptThaa::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('dv', $language->code());
    }
}
