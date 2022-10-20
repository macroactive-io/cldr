<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

class LanguageSrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSr();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame(PluralRule7::class, $language->pluralRule()::class);
        self::assertSame('sr', $language->code());
    }
}
