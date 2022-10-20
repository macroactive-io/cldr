<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptKhmr;
use PHPUnit\Framework\TestCase;

class LanguageKmTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKm();

        self::assertSame(ScriptKhmr::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('km', $language->code());
    }
}
