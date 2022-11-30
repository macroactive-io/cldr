<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageVun;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageVunTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageVun();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('vun', $language->code());
    }
}
