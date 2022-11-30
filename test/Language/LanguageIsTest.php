<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule15;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageIs;

class LanguageIsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageIs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('is', $language->code());
    }
}
