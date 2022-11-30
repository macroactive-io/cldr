<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageSwc;

class LanguageSwcTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSwc();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('swc', $language->code());
    }
}
