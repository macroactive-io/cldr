<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptHans;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageZh;

class LanguageZhTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageZh();

        self::assertSame(ScriptHans::class, $language->defaultScript()::class);
        self::assertSame('zh', $language->code());
    }
}
