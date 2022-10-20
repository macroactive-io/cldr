<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptOrya;
use PHPUnit\Framework\TestCase;

class LanguageOrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageOr();

        self::assertSame(ScriptOrya::class, $language->defaultScript()::class);
        self::assertSame(PluralRule1::class, $language->pluralRule()::class);
        self::assertSame('or', $language->code());
    }
}
