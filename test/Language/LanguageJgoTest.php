<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageJgo;

class LanguageJgoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageJgo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('jgo', $language->code());
    }
}
