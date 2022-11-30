<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageLt;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageLtTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLt();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('lt', $language->code());
    }
}
