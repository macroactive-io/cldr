<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule5;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageRoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageRo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule5::class, $language->pluralRule()::class);
        self::assertSame('ro', $language->code());
    }
}
