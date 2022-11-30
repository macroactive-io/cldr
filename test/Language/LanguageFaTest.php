<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageFa;

class LanguageFaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageFa();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame('fa', $language->code());
    }
}
