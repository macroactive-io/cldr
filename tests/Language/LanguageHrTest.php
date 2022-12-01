<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageHr;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageHrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageHr();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('hr', $language->code());
    }
}
