<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptSund;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageSu;

class LanguageSuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSu();

        self::assertSame(ScriptSund::class, $language->defaultScript()::class);
        self::assertSame('su', $language->code());
    }
}
