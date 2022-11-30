<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule8;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageCs;

class LanguageCsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageCs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('cs', $language->code());
    }
}
