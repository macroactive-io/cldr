<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageBsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame(PluralRule7::class, $language->pluralRule()::class);
        self::assertSame('bs', $language->code());
    }
}
