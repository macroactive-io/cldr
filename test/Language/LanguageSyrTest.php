<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptSyrc;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageSyr;

class LanguageSyrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSyr();

        self::assertSame(ScriptSyrc::class, $language->defaultScript()::class);
        self::assertSame('syr', $language->code());
    }
}
