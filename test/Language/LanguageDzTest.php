<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptTibt;
use PHPUnit\Framework\TestCase;

class LanguageDzTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageDz();

        self::assertSame(ScriptTibt::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('dz', $language->code());
    }
}
