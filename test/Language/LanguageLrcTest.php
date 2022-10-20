<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

class LanguageLrcTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLrc();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame(PluralRule12::class, $language->pluralRule()::class);
        self::assertSame('lrc', $language->code());
    }
}
