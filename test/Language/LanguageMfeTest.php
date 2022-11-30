<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageMfe;

class LanguageMfeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMfe();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mfe', $language->code());
    }
}
