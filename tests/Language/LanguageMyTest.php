<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMy;
use Macroactive\Cldr\Script\ScriptMymr;
use PHPUnit\Framework\TestCase;

class LanguageMyTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMy();

        self::assertSame(ScriptMymr::class, $language->defaultScript()::class);
        self::assertSame('my', $language->code());
    }
}
