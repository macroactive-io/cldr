<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptEthi;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageTi;

class LanguageTiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTi();

        self::assertSame(ScriptEthi::class, $language->defaultScript()::class);
        self::assertSame('ti', $language->code());
    }
}
