<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptJpan;
use PHPUnit\Framework\TestCase;

class LanguageJaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageJa();

        self::assertSame(ScriptJpan::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('ja', $language->code());
    }
}
