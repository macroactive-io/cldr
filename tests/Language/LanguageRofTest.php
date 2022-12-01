<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageRof;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageRofTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageRof();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('rof', $language->code());
    }
}
