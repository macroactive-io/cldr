<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageEn;

class LanguageEnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageEn();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('en', $language->code());
    }
}
