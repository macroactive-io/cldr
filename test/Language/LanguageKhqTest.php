<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKhqTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKhq();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('khq', $language->code());
    }
}
