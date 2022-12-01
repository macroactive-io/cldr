<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSes;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSesTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSes();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ses', $language->code());
    }
}
