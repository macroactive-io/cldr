<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptGrek;
use PHPUnit\Framework\TestCase;

class LanguageElTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageEl();

        self::assertSame(ScriptGrek::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('el', $language->code());
    }
}
