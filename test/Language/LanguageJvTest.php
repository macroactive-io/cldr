<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptJava;
use PHPUnit\Framework\TestCase;

class LanguageJvTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageJv();

        self::assertSame(ScriptJava::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('jv', $language->code());
    }
}
