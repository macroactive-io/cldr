<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptGujr;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageGu;

class LanguageGuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGu();

        self::assertSame(ScriptGujr::class, $language->defaultScript()::class);
        self::assertSame('gu', $language->code());
    }
}
