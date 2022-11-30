<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule9;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguagePl;

class LanguagePlTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguagePl();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('pl', $language->code());
    }
}
