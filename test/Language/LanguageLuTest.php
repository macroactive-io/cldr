<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageLu;

class LanguageLuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLu();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('lu', $language->code());
    }
}
