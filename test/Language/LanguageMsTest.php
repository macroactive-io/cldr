<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageMs;

class LanguageMsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ms', $language->code());
    }
}
