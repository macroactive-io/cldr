<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageTa;
use Macroactive\Cldr\Script\ScriptTaml;
use PHPUnit\Framework\TestCase;

class LanguageTaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTa();

        self::assertSame(ScriptTaml::class, $language->defaultScript()::class);
        self::assertSame('ta', $language->code());
    }
}
