<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptCakm;
use PHPUnit\Framework\TestCase;

class LanguageCcpTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageCcp();

        self::assertSame(ScriptCakm::class, $language->defaultScript()::class);
        self::assertSame(PluralRule0::class, $language->pluralRule()::class);
        self::assertSame('ccp', $language->code());
    }
}
