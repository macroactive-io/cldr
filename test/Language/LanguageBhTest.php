<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

class LanguageBhTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBh();

        self::assertSame(ScriptDeva::class, $language->defaultScript()::class);
        self::assertSame(PluralRule2::class, $language->pluralRule()::class);
        self::assertSame('bh', $language->code());
    }
}
