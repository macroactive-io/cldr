<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKu;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKu();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ku', $language->code());
    }
}
