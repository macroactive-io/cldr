<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguagePa;
use Macroactive\Cldr\Script\ScriptGuru;
use PHPUnit\Framework\TestCase;

class LanguagePaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguagePa();

        self::assertSame(ScriptGuru::class, $language->defaultScript()::class);
        self::assertSame('pa', $language->code());
    }
}
