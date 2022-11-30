<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTaml;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageTa;

class LanguageTaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTa();

        self::assertSame(ScriptTaml::class, $language->defaultScript()::class);
        self::assertSame('ta', $language->code());
    }
}
