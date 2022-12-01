<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageTr;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageTrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTr();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('tr', $language->code());
    }
}
