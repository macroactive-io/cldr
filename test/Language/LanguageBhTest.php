<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageBh;
use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

class LanguageBhTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBh();

        self::assertSame(ScriptDeva::class, $language->defaultScript()::class);
        self::assertSame('bh', $language->code());
    }
}
