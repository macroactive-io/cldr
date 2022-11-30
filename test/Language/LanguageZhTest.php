<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageZh;
use Macroactive\Cldr\Script\ScriptHans;
use PHPUnit\Framework\TestCase;

class LanguageZhTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageZh();

        self::assertSame(ScriptHans::class, $language->defaultScript()::class);
        self::assertSame('zh', $language->code());
    }
}
