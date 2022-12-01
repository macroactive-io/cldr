<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNb;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNbTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNb();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('nb', $language->code());
    }
}
