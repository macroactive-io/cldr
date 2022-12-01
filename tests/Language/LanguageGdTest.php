<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageGd;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageGdTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGd();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('gd', $language->code());
    }
}
