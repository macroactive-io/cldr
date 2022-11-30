<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageLrc;

class LanguageLrcTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLrc();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame('lrc', $language->code());
    }
}
