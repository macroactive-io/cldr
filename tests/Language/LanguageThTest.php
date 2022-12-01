<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageTh;
use Macroactive\Cldr\Script\ScriptThai;
use PHPUnit\Framework\TestCase;

class LanguageThTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTh();

        self::assertSame(ScriptThai::class, $language->defaultScript()::class);
        self::assertSame('th', $language->code());
    }
}
