<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

class LanguageCuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageCu();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('cu', $language->code());
    }
}
