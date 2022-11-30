<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageNe;

class LanguageNeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNe();

        self::assertSame(ScriptDeva::class, $language->defaultScript()::class);
        self::assertSame('ne', $language->code());
    }
}
