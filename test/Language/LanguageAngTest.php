<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageAng;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageAngTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAng();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ang', $language->code());
    }
}
