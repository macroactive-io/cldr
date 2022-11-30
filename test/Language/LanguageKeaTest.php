<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageKea;

class LanguageKeaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKea();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('kea', $language->code());
    }
}
