<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageFi;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageFiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageFi();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('fi', $language->code());
    }
}
