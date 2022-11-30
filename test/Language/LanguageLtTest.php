<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule6;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageLt;

class LanguageLtTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLt();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('lt', $language->code());
    }
}
