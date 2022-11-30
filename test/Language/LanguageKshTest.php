<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKsh;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKshTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKsh();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ksh', $language->code());
    }
}
