<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageBm;

class LanguageBmTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBm();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('bm', $language->code());
    }
}
