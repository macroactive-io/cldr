<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSbp;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSbpTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSbp();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('sbp', $language->code());
    }
}
