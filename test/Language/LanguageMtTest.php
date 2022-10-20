<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule13;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMtTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMt();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule13::class, $language->pluralRule()::class);
        self::assertSame('mt', $language->code());
    }
}
