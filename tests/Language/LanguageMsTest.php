<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMs;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ms', $language->code());
    }
}
