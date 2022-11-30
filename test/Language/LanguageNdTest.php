<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNd;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNdTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNd();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('nd', $language->code());
    }
}
