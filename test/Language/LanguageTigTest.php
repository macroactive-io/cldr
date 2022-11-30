<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptEthi;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageTig;

class LanguageTigTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTig();

        self::assertSame(ScriptEthi::class, $language->defaultScript()::class);
        self::assertSame('tig', $language->code());
    }
}
