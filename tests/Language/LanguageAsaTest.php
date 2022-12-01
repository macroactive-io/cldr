<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageAsa;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageAsaTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAsa();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('asa', $language->code());
    }
}
