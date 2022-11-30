<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageOm;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageOmTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageOm();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('om', $language->code());
    }
}
