<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptJpan;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageJa;

class LanguageJaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageJa();

        self::assertSame(ScriptJpan::class, $language->defaultScript()::class);
        self::assertSame('ja', $language->code());
    }
}
