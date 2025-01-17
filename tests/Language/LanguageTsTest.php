<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageTs;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageTsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ts', $language->code());
    }
}
