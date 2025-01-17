<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKln;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKlnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKln();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('kln', $language->code());
    }
}
