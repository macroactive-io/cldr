<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptMlym;
use PHPUnit\Framework\TestCase;

class LanguageMlTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMl();

        self::assertSame(ScriptMlym::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('ml', $language->code());
    }
}
