<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule6;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageLtTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLt();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule6::class, $language->pluralRule()::class);
        self::assertSame('lt', $language->code());
    }
}
