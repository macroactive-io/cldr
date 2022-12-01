<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNl;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNlTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNl();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('nl', $language->code());
    }
}
