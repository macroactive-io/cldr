<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageCu;

class LanguageCuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageCu();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame('cu', $language->code());
    }
}
