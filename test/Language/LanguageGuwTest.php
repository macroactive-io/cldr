<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageGuw;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageGuwTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGuw();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('guw', $language->code());
    }
}
