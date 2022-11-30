<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRuleCentralAtlasTamazight;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageTzm;

class LanguageTzmTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTzm();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('tzm', $language->code());
    }
}
