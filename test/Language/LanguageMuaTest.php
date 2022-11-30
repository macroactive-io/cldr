<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageMua;

class LanguageMuaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMua();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mua', $language->code());
    }
}
