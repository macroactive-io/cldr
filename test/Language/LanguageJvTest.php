<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptJava;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageJv;

class LanguageJvTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageJv();

        self::assertSame(ScriptJava::class, $language->defaultScript()::class);
        self::assertSame('jv', $language->code());
    }
}
