<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSeh;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSehTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSeh();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('seh', $language->code());
    }
}
