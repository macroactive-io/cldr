<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageHi;

class LanguageHiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageHi();

        self::assertSame(ScriptDeva::class, $language->defaultScript()::class);
        self::assertSame('hi', $language->code());
    }
}
