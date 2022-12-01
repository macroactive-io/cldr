<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageTt;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

class LanguageTtTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTt();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame('tt', $language->code());
    }
}
