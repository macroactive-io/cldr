<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageLb;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageLbTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLb();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('lb', $language->code());
    }
}
