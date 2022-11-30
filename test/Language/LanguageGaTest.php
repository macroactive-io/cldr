<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageGa;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageGaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGa();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ga', $language->code());
    }
}
