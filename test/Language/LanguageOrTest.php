<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptOrya;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageOr;

class LanguageOrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageOr();

        self::assertSame(ScriptOrya::class, $language->defaultScript()::class);
        self::assertSame('or', $language->code());
    }
}
