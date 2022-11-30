<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptSinh;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageSi;

class LanguageSiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSi();

        self::assertSame(ScriptSinh::class, $language->defaultScript()::class);
        self::assertSame('si', $language->code());
    }
}
