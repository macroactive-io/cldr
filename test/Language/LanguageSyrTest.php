<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSyr;
use Macroactive\Cldr\Script\ScriptSyrc;
use PHPUnit\Framework\TestCase;

class LanguageSyrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSyr();

        self::assertSame(ScriptSyrc::class, $language->defaultScript()::class);
        self::assertSame('syr', $language->code());
    }
}
