<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageIi;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageIiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageIi();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ii', $language->code());
    }
}
