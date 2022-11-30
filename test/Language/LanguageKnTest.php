<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptKnda;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageKn;

class LanguageKnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKn();

        self::assertSame(ScriptKnda::class, $language->defaultScript()::class);
        self::assertSame('kn', $language->code());
    }
}
