<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageMr;

class LanguageMrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMr();

        self::assertSame(ScriptDeva::class, $language->defaultScript()::class);
        self::assertSame('mr', $language->code());
    }
}
