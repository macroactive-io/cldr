<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageEnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageEn();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('en', $language->code());
    }
}
