<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

class LanguageArTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAr();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame('ar', $language->code());
    }
}
