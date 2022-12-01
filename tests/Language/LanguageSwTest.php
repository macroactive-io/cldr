<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSw;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSwTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSw();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('sw', $language->code());
    }
}
