<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule4;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageGd;

class LanguageGdTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGd();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('gd', $language->code());
    }
}
