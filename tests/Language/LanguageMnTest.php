<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMn;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMn();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mn', $language->code());
    }
}
