<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageAa;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageAaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAa();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('aa', $language->code());
    }
}
