<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptThaa;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageDv;

class LanguageDvTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageDv();

        self::assertSame(ScriptThaa::class, $language->defaultScript()::class);
        self::assertSame('dv', $language->code());
    }
}
