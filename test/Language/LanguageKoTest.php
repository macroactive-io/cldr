<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKo;
use Macroactive\Cldr\Script\ScriptKore;
use PHPUnit\Framework\TestCase;

class LanguageKoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKo();

        self::assertSame(ScriptKore::class, $language->defaultScript()::class);
        self::assertSame('ko', $language->code());
    }
}
