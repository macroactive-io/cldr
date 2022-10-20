<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptNkoo;
use PHPUnit\Framework\TestCase;

class LanguageNqoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNqo();

        self::assertSame(ScriptNkoo::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('nqo', $language->code());
    }
}
