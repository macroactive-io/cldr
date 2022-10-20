<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageGuzTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGuz();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('guz', $language->code());
    }
}
