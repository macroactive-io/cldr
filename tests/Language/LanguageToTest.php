<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageTo;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageToTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('to', $language->code());
    }
}
