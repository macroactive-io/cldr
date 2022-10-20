<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageLuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLu();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('lu', $language->code());
    }
}
