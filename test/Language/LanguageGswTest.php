<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageGsw;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageGswTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGsw();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('gsw', $language->code());
    }
}
