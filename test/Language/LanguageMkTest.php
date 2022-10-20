<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule15;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

class LanguageMkTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMk();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame(PluralRule15::class, $language->pluralRule()::class);
        self::assertSame('mk', $language->code());
    }
}
