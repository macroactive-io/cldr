<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageEbu;

class LanguageEbuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageEbu();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ebu', $language->code());
    }
}
