<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageLg;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageLgTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLg();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('lg', $language->code());
    }
}
