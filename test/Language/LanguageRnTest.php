<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageRn;

class LanguageRnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageRn();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('rn', $language->code());
    }
}
