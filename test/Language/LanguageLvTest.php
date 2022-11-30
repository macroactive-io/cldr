<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule3;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageLv;

class LanguageLvTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLv();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('lv', $language->code());
    }
}
