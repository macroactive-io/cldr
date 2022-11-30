<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageCe;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

class LanguageCeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageCe();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame('ce', $language->code());
    }
}
