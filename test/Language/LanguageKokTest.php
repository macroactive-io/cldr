<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

class LanguageKokTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKok();

        self::assertSame(ScriptDeva::class, $language->defaultScript()::class);
        self::assertSame('kok', $language->code());
    }
}
