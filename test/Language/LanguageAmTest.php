<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageAm;
use Macroactive\Cldr\Script\ScriptEthi;
use PHPUnit\Framework\TestCase;

class LanguageAmTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAm();

        self::assertSame(ScriptEthi::class, $language->defaultScript()::class);
        self::assertSame('am', $language->code());
    }
}
