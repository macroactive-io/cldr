<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageHaw;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageHawTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageHaw();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('haw', $language->code());
    }
}
