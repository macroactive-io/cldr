<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNnh;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNnhTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNnh();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('nnh', $language->code());
    }
}
