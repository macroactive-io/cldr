<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSe;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSe();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('se', $language->code());
    }
}
