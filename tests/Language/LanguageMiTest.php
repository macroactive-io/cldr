<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMi;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMi();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mi', $language->code());
    }
}
