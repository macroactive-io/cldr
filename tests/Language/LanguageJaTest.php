<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageJa;
use Macroactive\Cldr\Script\ScriptJpan;
use PHPUnit\Framework\TestCase;

class LanguageJaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageJa();

        self::assertSame(ScriptJpan::class, $language->defaultScript()::class);
        self::assertSame('ja', $language->code());
    }
}
