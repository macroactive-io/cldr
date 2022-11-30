<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageBem;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageBemTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBem();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('bem', $language->code());
    }
}
