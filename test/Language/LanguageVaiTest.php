<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageVai;
use Macroactive\Cldr\Script\ScriptVaii;
use PHPUnit\Framework\TestCase;

class LanguageVaiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageVai();

        self::assertSame(ScriptVaii::class, $language->defaultScript()::class);
        self::assertSame('vai', $language->code());
    }
}
