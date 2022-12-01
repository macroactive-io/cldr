<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageLag;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageLagTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLag();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('lag', $language->code());
    }
}
