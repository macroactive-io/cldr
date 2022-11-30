<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageRo;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageRoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageRo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ro', $language->code());
    }
}
