<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageRwk;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageRwkTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageRwk();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('rwk', $language->code());
    }
}
