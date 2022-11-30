<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageDje;

class LanguageDjeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageDje();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('dje', $language->code());
    }
}
