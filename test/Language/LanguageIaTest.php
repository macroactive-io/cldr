<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageIa;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageIaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageIa();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ia', $language->code());
    }
}
