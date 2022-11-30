<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKs;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

class LanguageKsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKs();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame('ks', $language->code());
    }
}
