<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLaoo;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageLo;

class LanguageLoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLo();

        self::assertSame(ScriptLaoo::class, $language->defaultScript()::class);
        self::assertSame('lo', $language->code());
    }
}
