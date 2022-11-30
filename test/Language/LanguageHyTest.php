<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptArmn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageHy;

class LanguageHyTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageHy();

        self::assertSame(ScriptArmn::class, $language->defaultScript()::class);
        self::assertSame('hy', $language->code());
    }
}
