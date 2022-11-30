<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKa;
use Macroactive\Cldr\Script\ScriptGeor;
use PHPUnit\Framework\TestCase;

class LanguageKaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKa();

        self::assertSame(ScriptGeor::class, $language->defaultScript()::class);
        self::assertSame('ka', $language->code());
    }
}
