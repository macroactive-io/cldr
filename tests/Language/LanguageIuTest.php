<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageIu;
use Macroactive\Cldr\Script\ScriptCans;
use PHPUnit\Framework\TestCase;

class LanguageIuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageIu();

        self::assertSame(ScriptCans::class, $language->defaultScript()::class);
        self::assertSame('iu', $language->code());
    }
}
