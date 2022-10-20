<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

class LanguageNeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNe();

        self::assertSame(ScriptDeva::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('ne', $language->code());
    }
}
