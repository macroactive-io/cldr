<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguagePrg;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguagePrgTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguagePrg();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('prg', $language->code());
    }
}
