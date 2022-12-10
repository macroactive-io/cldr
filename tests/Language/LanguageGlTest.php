<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageGl;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageGlTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGl();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('gl', $language->code());
    }
}