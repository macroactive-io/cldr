<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageHa;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageHaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageHa();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ha', $language->code());
    }
}
