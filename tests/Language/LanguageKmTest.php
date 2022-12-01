<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKm;
use Macroactive\Cldr\Script\ScriptKhmr;
use PHPUnit\Framework\TestCase;

class LanguageKmTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKm();

        self::assertSame(ScriptKhmr::class, $language->defaultScript()::class);
        self::assertSame('km', $language->code());
    }
}
