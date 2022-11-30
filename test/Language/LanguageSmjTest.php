<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSmj;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSmjTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSmj();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('smj', $language->code());
    }
}
