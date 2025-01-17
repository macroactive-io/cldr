<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageBas;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageBasTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBas();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('bas', $language->code());
    }
}
