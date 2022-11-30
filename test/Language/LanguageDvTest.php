<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageDv;
use Macroactive\Cldr\Script\ScriptThaa;
use PHPUnit\Framework\TestCase;

class LanguageDvTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageDv();

        self::assertSame(ScriptThaa::class, $language->defaultScript()::class);
        self::assertSame('dv', $language->code());
    }
}
