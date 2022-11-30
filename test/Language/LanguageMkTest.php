<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMk;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

class LanguageMkTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMk();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame('mk', $language->code());
    }
}
