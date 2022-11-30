<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageDe;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageDeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageDe();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('de', $language->code());
    }
}
