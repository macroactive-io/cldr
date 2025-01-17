<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageUr;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

class LanguageUrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageUr();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame('ur', $language->code());
    }
}
