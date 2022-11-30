<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptGeor;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageKa;

class LanguageKaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKa();

        self::assertSame(ScriptGeor::class, $language->defaultScript()::class);
        self::assertSame('ka', $language->code());
    }
}
