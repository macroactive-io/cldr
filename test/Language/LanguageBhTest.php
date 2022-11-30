<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageBh;

class LanguageBhTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBh();

        self::assertSame(ScriptDeva::class, $language->defaultScript()::class);
        self::assertSame('bh', $language->code());
    }
}
