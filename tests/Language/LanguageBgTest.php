<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageBg;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

class LanguageBgTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBg();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame('bg', $language->code());
    }
}
