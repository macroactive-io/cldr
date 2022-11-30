<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSt;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageStTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSt();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('st', $language->code());
    }
}
