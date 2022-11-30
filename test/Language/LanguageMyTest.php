<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptMymr;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageMy;

class LanguageMyTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMy();

        self::assertSame(ScriptMymr::class, $language->defaultScript()::class);
        self::assertSame('my', $language->code());
    }
}
