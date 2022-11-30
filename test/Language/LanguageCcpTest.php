<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptCakm;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageCcp;

class LanguageCcpTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageCcp();

        self::assertSame(ScriptCakm::class, $language->defaultScript()::class);
        self::assertSame('ccp', $language->code());
    }
}
