<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageDje;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageDjeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageDje();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('dje', $language->code());
    }
}
