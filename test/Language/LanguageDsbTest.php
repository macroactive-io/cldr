<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageDsb;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageDsbTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageDsb();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('dsb', $language->code());
    }
}
