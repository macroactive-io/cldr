<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageAk;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageAkTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAk();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ak', $language->code());
    }
}
