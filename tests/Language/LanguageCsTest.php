<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageCs;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageCsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageCs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('cs', $language->code());
    }
}
