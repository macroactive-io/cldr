<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageZu;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageZuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageZu();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('zu', $language->code());
    }
}
