<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguagePs;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

class LanguagePsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguagePs();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame('ps', $language->code());
    }
}
