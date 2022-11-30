<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptHebr;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageHe;

class LanguageHeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageHe();

        self::assertSame(ScriptHebr::class, $language->defaultScript()::class);
        self::assertSame('he', $language->code());
    }
}
