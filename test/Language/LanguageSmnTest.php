<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSmn;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSmnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSmn();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('smn', $language->code());
    }
}
