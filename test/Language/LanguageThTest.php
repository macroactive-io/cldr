<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptThai;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageTh;

class LanguageThTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTh();

        self::assertSame(ScriptThai::class, $language->defaultScript()::class);
        self::assertSame('th', $language->code());
    }
}
