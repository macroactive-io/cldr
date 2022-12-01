<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKi;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKi();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ki', $language->code());
    }
}
