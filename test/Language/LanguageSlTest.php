<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSl;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSlTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSl();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('sl', $language->code());
    }
}
