<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageFil;

class LanguageFilTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageFil();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('fil', $language->code());
    }
}
