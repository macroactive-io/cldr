<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageKaj;

class LanguageKajTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKaj();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('kaj', $language->code());
    }
}
