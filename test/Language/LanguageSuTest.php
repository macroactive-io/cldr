<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSu;
use Macroactive\Cldr\Script\ScriptSund;
use PHPUnit\Framework\TestCase;

class LanguageSuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSu();

        self::assertSame(ScriptSund::class, $language->defaultScript()::class);
        self::assertSame('su', $language->code());
    }
}
