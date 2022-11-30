<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule10;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageDsb;

class LanguageDsbTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageDsb();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('dsb', $language->code());
    }
}
