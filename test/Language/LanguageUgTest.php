<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageUg;

class LanguageUgTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageUg();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame('ug', $language->code());
    }
}
