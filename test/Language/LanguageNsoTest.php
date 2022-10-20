<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNsoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNso();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule2::class, $language->pluralRule()::class);
        self::assertSame('nso', $language->code());
    }
}
