<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageRu;

class LanguageRuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageRu();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame('ru', $language->code());
    }
}
