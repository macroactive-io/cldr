<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageLn;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageLnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLn();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ln', $language->code());
    }
}
