<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageGv;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageGvTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGv();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('gv', $language->code());
    }
}
