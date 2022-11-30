<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageDz;
use Macroactive\Cldr\Script\ScriptTibt;
use PHPUnit\Framework\TestCase;

class LanguageDzTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageDz();

        self::assertSame(ScriptTibt::class, $language->defaultScript()::class);
        self::assertSame('dz', $language->code());
    }
}
