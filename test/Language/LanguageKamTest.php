<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKam;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKamTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKam();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('kam', $language->code());
    }
}
