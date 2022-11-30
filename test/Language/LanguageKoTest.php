<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptKore;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageKo;

class LanguageKoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKo();

        self::assertSame(ScriptKore::class, $language->defaultScript()::class);
        self::assertSame('ko', $language->code());
    }
}
