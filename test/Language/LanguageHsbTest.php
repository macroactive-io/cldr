<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageHsb;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageHsbTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageHsb();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('hsb', $language->code());
    }
}
