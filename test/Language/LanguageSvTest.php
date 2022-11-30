<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSv;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSvTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSv();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('sv', $language->code());
    }
}
