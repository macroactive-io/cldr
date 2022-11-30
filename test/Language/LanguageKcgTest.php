<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKcg;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKcgTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKcg();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('kcg', $language->code());
    }
}
