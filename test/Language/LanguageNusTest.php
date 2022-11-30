<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageNus;

class LanguageNusTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNus();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('nus', $language->code());
    }
}
