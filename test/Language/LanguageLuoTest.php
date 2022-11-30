<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageLuo;

class LanguageLuoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLuo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('luo', $language->code());
    }
}
