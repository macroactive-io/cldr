<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSk;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSkTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSk();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('sk', $language->code());
    }
}
