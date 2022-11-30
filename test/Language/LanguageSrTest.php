<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSr;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

class LanguageSrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSr();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame('sr', $language->code());
    }
}
