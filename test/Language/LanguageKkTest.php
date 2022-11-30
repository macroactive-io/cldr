<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageKk;

class LanguageKkTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKk();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame('kk', $language->code());
    }
}
