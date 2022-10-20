<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSn();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('sn', $language->code());
    }
}
