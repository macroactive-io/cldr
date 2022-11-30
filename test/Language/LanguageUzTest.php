<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageUz;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageUzTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageUz();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('uz', $language->code());
    }
}
